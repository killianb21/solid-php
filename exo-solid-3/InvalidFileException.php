<?php

abstract class InvalidFileException extends Exception{
    public function __construct(string $message = ""){
        parent::__construct($message);
    }
}

class InvalidExtensionException extends InvalidFileException{
    public function __construct($actual, $extension){
        parent::__construct("Fichier ".$actual." attendu mais ''$extension'' obtenu");
    }
}

class UnknownExtensionException extends InvalidFileException{

    public function __construct(){
        parent::__construct("Les fichiers sans extension ne sont pas acceptés.");
    }
}