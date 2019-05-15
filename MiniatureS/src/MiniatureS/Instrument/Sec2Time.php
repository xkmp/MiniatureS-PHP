<?php
namespace MiniatureS\Instrument;

use MiniatureS\MiniatureS;

class Sec2Time
{
    private $plugin;
    public function __construct(MiniatureS $plugin)
    {
        $this->plugin = $plugin;
    }

    public function ComputationTimeToString($time): string
    {
        $value = $this->ComputationTime($time);
        return $value["years"] . "年" . $value["days"] . "天" . " " . $value["hours"] . "小时" . $value["minutes"] . "分" . $value["seconds"] . "秒";
    }

    public function ComputationTime($time): array
    {
        if (is_numeric($time)) {
            $value = array(
                "years" => 0,
                "days" => 0,
                "hours" => 0,
                "minutes" => 0,
                "seconds" => 0
            );
            if ($time >= 31556926) {
                $value["years"] = floor($time / 31556926);
                $time = ($time % 31556926);
            }
            if ($time >= 86400) {
                $value["days"] = floor($time / 86400);
                $time = ($time % 86400);
            }
            if ($time >= 3600) {
                $value["hours"] = floor($time / 3600);
                $time = ($time % 3600);
            }
            if ($time >= 60) {
                $value["minutes"] = floor($time / 60);
                $time = ($time % 60);
            }
            $value["seconds"] = floor($time);
            return $value;
        } else {
            return FALSE;
        }
    }
}