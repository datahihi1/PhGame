<?php

namespace Datahihi1\Phgame\core;

class CoreEngine{
    private static int $tick = 1000;

    private static bool $running = true;

    public static function init(int $tick = self::$tick): void{
        self::$tick = $tick;
    }

    
}