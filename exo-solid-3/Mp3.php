<?php

require_once 'MusicType.php';
require_once 'InvalidFileException.php';

class Mp3 extends MusicType
{   

    public function listen()
    {
        $extension = pathinfo($this->filename, PATHINFO_EXTENSION);
        if ($extension !== 'mp3') {
            throw new InvalidExtensionException('Mp3', $extension);
        }

        return 'Lecture du fichier Mp3 '. $this->filename;
    }

    public function getName(){
        return $this->filename;
    }
}
