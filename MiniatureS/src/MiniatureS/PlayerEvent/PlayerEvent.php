<?php
namespace MiniatureS\PlayerEvent;

use MiniatureS\MiniatureS;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use const MiniatureS\QuitID;
use const MiniatureS\JoinID;
use const MiniatureS\JoinFSRID;
use MiniatureS\Instrument\SmallTools;
use MiniatureS\PlayerEvent\Command\MyDataGUI;
use MiniatureS\GUI\makeMainGUI;

class PlayerEvent implements Listener
{

    private $plugin;

    public function __construct(MiniatureS $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onQuit(PlayerQuitEvent $e)
    {
        $player = $e->getPlayer();
        $makeQuitMsg = new Quit($this->plugin);
        if ($this->plugin->config->get("退出提示")["撤销默认通知"]) {
            $e->setQuitMessage(NULL);
        }
        $makeQuitMsg->makeQuitMsg($player, QuitID);
        $makeQuitMsg->makePlayerOnlineTime($player);
        unset($this->plugin->addPlayerJoinTime[$player->getName()]);
    }

    public function onJoin(PlayerJoinEvent $e)
    {
        $player = $e->getPlayer();
        $makeJoin = new Join($this->plugin);
        if ($this->plugin->config->get("进服提示")["撤销默认通知"]) {
            $e->setJoinMessage(NULL);
        }
        $makeJoin->makeJoinMsg($player, JoinID);
        $makeJoin->makeJoinFullScaleRadio(JoinFSRID, $player->getName());
        $makeJoin->makeDefaultConfig($player);
    }

    public function onPlayerInteractEvent(PlayerInteractEvent $e)
    {
        $player = $e->getPlayer();
        $block = $e->getBlock();
        $plugin = $this->plugin;
        $item = $e->getItem();
        $block_ID = $block->getId();
        $block_Damage = $block->getDamage();
        $item_ID = $item->getId();
        $item_Damage = $item->getDamage();
        if ($plugin->config->get("记录玩家信息")) {
            $config = $plugin->config->get("点击查看记录数据");
            if ($config["点击查看记录数据"]) {
                if (SmallTools::isText($config["被点击方块"], ":")) {
                    $xid = explode(":", $config["被点击方块"]);
                    $DD = strtolower($xid[1]);
                    $ID = $xid[0];
                } else {
                    $DD = "x";
                    $ID = $config["被点击方块"];
                }
                if ($DD == "x" or ($ID == $block_ID and $DD == $block_Damage)) {
                    $xid = explode(":", $config["手持物品"]);
                    if (count($xid) > 1) {
                        $xid = explode(":", $config["手持物品"]);
                        $DD = strtolower($xid[1]);
                        $ID = $xid[0];
                    } else {
                        $DD = "x";
                        $ID = $config["手持物品"];
                    }
                    if ($DD == "x" or ($ID == $item_ID and $DD == $item_Damage)) {
                        if ($config["撤销点击事件"]) {
                            $e->setCancelled();
                        }
                        $mydata = new MyDataGUI($this->plugin);
                        $mydata->makeMyDayaGUI($player);
                    }
                }
            }
        } else {
            $player->sendMessage($plugin->DefaultMsg->get("未开启玩家记录"));
        }
        if ($plugin->config->get("点击打开GUI")["点击打开GUI"]) {
            $config = $plugin->config->get("点击打开GUI");
            $xid = explode(":", $config["被点击方块"]);
            if (count($xid) > 1) {
                $xid = explode(":", $config["被点击方块"]);
                $DD = strtolower($xid[1]);
                $ID = $xid[0];
            } else {
                $DD = "x";
                $ID = $config["被点击方块"];
            }
            if ($DD == "x" or ($ID == $block_ID and $DD == $block_Damage)) {
                $xid = explode(":", $config["手持物品"]);
                if (count($xid) > 1) {
                    $xid = explode(":", $config["手持物品"]);
                    $DD = strtolower($xid[1]);
                    $ID = $xid[0];
                } else {
                    $DD = "x";
                    $ID = $config["手持物品"];
                }
                if ($DD == "x" or ($DD == $item_Damage and $ID == $item_ID)) {
                   $makeMainGUI=new makeMainGUI($plugin);
                   $makeMainGUI->makeMainGUI($player);
                }
            }
        }
    }
}