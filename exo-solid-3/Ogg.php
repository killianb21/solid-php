<?php

require_once 'MusicType.php';
require_once 'InvalidFileException.php';

class Ogg extends MusicType
{
    public function listen()
    {
        $extension = pathinfo($this->filename, PATHINFO_EXTENSION);
        if ($extension !== 'ogg') {
            throw new InvalidExtensionException('Ogg', $extension);
        }

        return 'Lecture du fichier Ogg '. $this->filename;
    }

    public function getName(){
        return $this->filename;
    }
}
