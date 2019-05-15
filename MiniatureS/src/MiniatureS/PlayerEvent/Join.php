<?php
namespace MiniatureS\PlayerEvent;

use MiniatureS\MiniatureS;
use pocketmine\Player;
use pocketmine\utils\Config;
use jojoe77777\FormAPI\SimpleForm;

class Join
{

    private $plugin;

    public function __construct(MiniatureS $plugin)
    {
        $this->plugin = $plugin;
    }

    public function makeDefaultConfig($player)
    {
        if ($this->plugin->config->get("记录玩家信息")) {
            if ($player instanceof Player) {
                $player = $player->getName();
            }
            $config = new Config($this->plugin->getDataFolder() . "/Player/" . $player . ".yml", Config::YAML, array(
                "挖掘方块数" => 0,
                "死亡次数" => 0,
                "进服次数" => 0,
                "在线时间" => 0,
                "注册时间" => date("Y-m-d H:i:s"),
            ));
            $config->set("进服次数", $config->get("进服次数") + 1);
            $config->save();
            $this->plugin->addPlayerJoinTime[$player] = time();
        }
    }

    public function makeJoinFullScaleRadio(int $ID, $name)
    {
        $config = $this->plugin->config->get("进服提示");
        $config["广播内容"]=str_replace("{name}",$name, str_replace('\n',"\n", $config["广播内容"]));
        if ($config["全服广播"]) {
            switch (strtolower($config["广播方式"])) {
                case "title":
                    $this->plugin->getServer()->broadcastTitle($config["广播内容"]);
                    break;
                case "tip":
                    $this->plugin->getServer()->broadcastTip($config["广播内容"]);
                    break;
                case "popup":
                    $this->plugin->getServer()->broadcastPopup($config["广播内容"]);
                    break;
                case "gui":
                    foreach ($this->plugin->getServer()->getOnlinePlayers() as $player) {
                        if ($player->isOnline()) {
                            $sbJoinServer = new SimpleForm($ID, function (Player $player, array $data) {});
                            $sbJoinServer->setTitle($this->plugin->getServer()
                                ->getName());
                            $sbJoinServer->setContent($config["广播内容"]);
                            $sbJoinServer->addButton("确定");
                            $sbJoinServer->sendToPlayer($player);
                        }
                    }
                    break;
                case "msg":
                    $this->plugin->getServer()->broadcastMessage($config["广播内容"]);
                    break;
            }
        }
    }

    public function makeJoinMsg(Player $player, int $ID)
    {
        $config = $this->plugin->config->get("进服提示");
        if ($config["进服提示"]) {
            switch (strtolower($config["提示方式"])) {
                case "title":
                    $player->sendTitle($config["提示内容"]);
                    break;
                case "tip":
                    $player->sendTip($config["提示内容"]);
                    break;
                case "msg":
                    $player->sendMessage($config["提示内容"]);
                    break;
                case "popup":
                    $player->sendPopup($config["提示内容"]);
                    break;
                case "gui":
                    $sbJoinServer = new SimpleForm($ID, function (Player $player, array $data) {});
                    $sbJoinServer->setTitle($this->plugin->getServer()
                        ->getName());
                    $sbJoinServer->setContent($config["提示内容"]);
                    $sbJoinServer->addButton("确定");
                    $sbJoinServer->sendToPlayer($player);
                    break;
            }
        }
    }
}