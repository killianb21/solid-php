<?php


require_once 'FileInformation.php';

class Uploader
{
    private $fileInformation;

    public function __construct($file)
    {
        $this->fileInformation = new FileInformation($file);
    }

    public function uploadFile()
    {
        if (!in_array($this->fileInformation->getType(), $this->fileInformation->getValidTypes())) {
            $this->error = 'Le fichier ' . $this->fileInformation->getName() . ' n\'est pas d\'un type valide';

            return false;
        } else {
            return true;
        }
    }

    public function resize($origin, $destination, $width, $maxHeight)
    {
        $this->fileInformation->resize($origin, $destination, $width, $maxHeight);
    }
}