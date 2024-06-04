<?php

namespace app\FileManager\Controllers;

use app\FileManager\Models\FileManagerModel;
use Core\Controller;

class FileManagerController extends Controller
{
    /**
     * @return void
     */
    public function index(): void
    {
        $fileManagerModel = new FileManagerModel();
        $workingDirectory = $fileManagerModel->getDirectory();

        $currentDirectory = (!$_GET['dir'] || $_GET['dir'] === FileManagerModel::PROJECT_NAME)
            ? $workingDirectory
            : $workingDirectory . DIRECTORY_SEPARATOR . $_GET['dir'];

        $files = $fileManagerModel->getFiles($currentDirectory);
        $folders = $fileManagerModel->getFolders($currentDirectory);
        [$prevDirectory, $currentDirectory] = $fileManagerModel->getSeparateDirectories($_GET['dir'] ?? '');

        $this->view('file_manager/index', [
            'folders' => $folders,
            'images' => $files,
            'prevDirectory' => $prevDirectory,
            'currentDirectory' => $currentDirectory,
        ]);
    }
}
