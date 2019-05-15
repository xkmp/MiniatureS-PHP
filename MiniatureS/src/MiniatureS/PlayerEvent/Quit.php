<?php
namespace MiniatureS\PlayerEvent;

use MiniatureS\MiniatureS;
use pocketmine\Player;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\utils\Config;
class Quit
{

    public function __construct(MiniatureS $plugin)
    {
        $this->plugin = $plugin;
    }

    public function makePlayerOnlineTime($player)
    {
        if ($player instanceof Player) {
            $player = $player->getName();
        }
        $time = time() - $this->plugin->addPlayerJoinTime[$player];
        if ($time > 1) {
            $config = new Config($this->plugin->getDataFolder() . "/Player/" . $player . ".yml", Config::YAML, array());
            $config->set("在线时间", $this->plugin->config->get("在线时间") + $time);
            $config->save();
        }
    }

    public function makeQuitMsg(Player $player, int $ID)
    {
        $config = $this->plugin->config->get("退出提示");
        $config["提示内容"]=str_replace("{name}",$player->getName(), $config["提示内容"]);
        if ($config["退出提示"]) {
            $this->plugin->getLogger()->info(strtolower($config["提示方式"]));
            switch (strtolower($config["提示方式"])) {
                case "title":
                    $this->plugin->getServer()->broadcastTitle($config["提示内容"]);
                    break;
                case "tip":
                    $this->plugin->getServer()->broadcastTip($config["提示内容"]);
                    break;
                case "msg":
                    $this->plugin->getServer()->broadcastMessage($config["提示内容"]);
                    break;
                case "popup":
                    $this->plugin->getServer()->broadcastPopup($config["提示内容"]);
                    break;
                case "gui":
                    foreach ($this->plugin->getServer()->getOnlinePlayers() as $player) {
                        if ($player->isOnline()) {
                            $sbJoinServer = new SimpleForm($ID, function (Player $player, array $data) {});
                            $sbJoinServer->setTitle($this->plugin->getServer()
                                ->getName());
                            $sbJoinServer->setContent($config["提示内容"]);
                            $sbJoinServer->addButton("确定");
                            $sbJoinServer->sendToPlayer($player);
                        }
                    }
                    break;
            }
        }
    }
}
    