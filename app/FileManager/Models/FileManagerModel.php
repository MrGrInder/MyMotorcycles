<?php

namespace app\FileManager\Models;

use Core\Model;

class FileManagerModel extends Model
{
    /**
     * @param string $directory
     * @return array
     */
    public function getFiles(string $directory): array
    {
        $files = [];

        if (is_dir($directory)) {
            $fileList = scandir($directory);
            foreach ($fileList as $file) {
                if ($file!== '.' && $file!== '..' && exif_imagetype("{$directory}/{$file}") !== false) {
                    $files[] = $file;
                }
            }
        }

        return $files;
    }

    /**
     * @param string $directory
     * @return array
     */
    public function getFolders(string $directory): array
    {
        $folders = [];

        if (is_dir($directory)) {
            $folderList = scandir($directory);
            foreach ($folderList as $folder) {
                if ($folder!== '.' && $folder!== '..' && is_dir("{$directory}/{$folder}")) {
                    $folders[] = $folder;
                }
            }
        }

        return $folders;
    }

    /**
     * @param string $currentDirectory
     * @param bool $isImpasse
     * @return array
     */
    public function getSeparateDirectoryes(string $currentDirectory, bool $isImpasse = false): array
    {
        $dirs = explode('/', $currentDirectory);

        if ($currentDirectory === parent::PROJECT_NAME || empty($dirs)) {
            return ['', ''];
        }

        $current = array_pop($dirs);
        $prev = implode('/', $dirs);

        return [$prev, $current];
    }
}
