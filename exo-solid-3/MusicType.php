<?php

require_once "MusicInterface.php";

abstract class MusicType implements MusicInterface
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getFilename() : string
    {
        return $this->filename;
    }

    abstract public function listen();
}
