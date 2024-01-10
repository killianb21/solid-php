<?php

require_once("EventActionable.php");
require_once("Nameable.php");

class WatchEvent implements Nameable, EventActionable
{
    public function name(): string
    {
        return 'WatchEvent';
    }

    public function action(): array
    {
        return [
            'comment',
            'reject',
            'close',
            'follow',
        ];
    }
}
