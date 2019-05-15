<?php
namespace MiniatureS\Instrument;

use MiniatureS\MiniatureS;

class SmallTools
{

    private $plugin;

    public function __construct(MiniatureS $plugin)
    {
        $this->plugin = $plugin;
    }

    public static function  isText(String $Context, string $isText): bool
    {
        if ($Context === null or $isText === null) {
            return FALSE;
        }
        $ex = explode($isText, $Context);
        if (count($ex) > 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}