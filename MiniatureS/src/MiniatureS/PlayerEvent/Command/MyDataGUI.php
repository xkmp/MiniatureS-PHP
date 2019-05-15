<?php
namespace MiniatureS\PlayerEvent\Command;

use MiniatureS\MiniatureS;
use pocketmine\Player;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\utils\Config;
use const MiniatureS\QxamineMyDataID;
use pocketmine\utils\TextFormat;
use MiniatureS\Instrument\Sec2Time;

class MyDataGUI
{

    private $plugin;

    public function __construct(MiniatureS $plugin)
    {
        $this->plugin = $plugin;
    }

    public function makeMyDayaGUI(Player $player, string $name = null)
    {
        if ($name === null) {
            $name = $player->getName();
        }
        $config = new Config($this->plugin->getDataFolder() . "/Player/" . $name . ".yml", Config::YAML, array(
            "挖掘方块数" => 0,
            "死亡次数" => 0,
            "进服次数" => 0,
            "在线时间" => 0,
            "注册时间" => date("Y-m-d H:i:s")
        ));
        $config = $config->getAll();
        $st = new Sec2Time($this->plugin);
        $time = $st->ComputationTimeToString($config["在线时间"]);
        $msg = TextFormat::RED . "玩家名: " . $name . "\n" . TextFormat::YELLOW . "注册时间: " . TextFormat::BOLD . $config["注册时间"] . "\n" . TextFormat::GREEN . "进服次数: " . TextFormat::WHITE . $config["进服次数"] . "\n" . TextFormat::AQUA . "死亡次数: " . TextFormat::RED . $config["死亡次数"] . "\n" . TextFormat::BOLD . "挖掘方块数: " . TextFormat::GRAY . $config["挖掘方块数"] . "\n" . TextFormat::ITALIC . "在线时间: " . TextFormat::LIGHT_PURPLE . $time;
        $sbJoinServer = new SimpleForm(QxamineMyDataID, function (Player $player, array $data) {});
        $sbJoinServer->setTitle(TextFormat::GOLD . $name);
        $sbJoinServer->setContent($msg);
        $sbJoinServer->addButton(TextFormat::BLUE . "确定");
        $sbJoinServer->sendToPlayer($player);
    }
}