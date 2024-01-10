<?php

require_once("Nameable.php");

class PushEvent implements Nameable
{
    public function name(): string
    {
        return 'PushEvent';
    }
}
