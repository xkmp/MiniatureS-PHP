<?php
namespace MiniatureS\PlayerEvent;

use MiniatureS\MiniatureS;
use MiniatureS\PlayerEvent\Command\MyDataGUI;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Command
{

    private $plugin;

    public function __construct(MiniatureS $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onCmd(Player $player, $command, $label, $k)
    {
        $name = $player->getName();
        $plugin = $this->plugin;
        switch (strtolower($command->getName())) {
            case "mis":
            case "miniatures":
                if (! isset($k[0])) {
                    return false;
                }
                switch (strtolower($k[0])) {
                    case "查看":
                    case "mydata":
                    case "md":
                    case "examine":
                        if ($plugin->config->get("记录玩家信息")) {
                            $mydata = new MyDataGUI($this->plugin);
                            $mydata->makeMyDayaGUI($player);
                        } else {
                            $player->sendMessage($plugin->DefaultMsg->get("未开启玩家记录"));
                        }
                        return true;
                    case "help":
                    case "h":
                    case "帮助":
                        $player->sendMessage(TextFormat::GOLD . "=================" . TextFormat::BLUE . "[" . TextFormat::AQUA . $plugin->getName() . TextFormat::BLUE . "]" . TextFormat::GOLD . "=================");

                        return true;
                }
                break;
        }
    }

    public function makeCommandHelpMsg()
    {
        return array(
            "help" => array(
                "default" => true,
                "description" => "辅助功能主命令",
                "subcommand" => array()
            ),
            "help" => array(
                "default" => true,
                "description" => "辅助功能主命令",
                "subcommand" => array()
            )
        );
    }
}