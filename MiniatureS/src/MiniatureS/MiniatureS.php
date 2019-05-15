<?php
namespace MiniatureS;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use MiniatureS\Config\Configs;
use MiniatureS\PlayerEvent\PlayerEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use MiniatureS\PlayerEvent\Command as MyCommand;
use MiniatureS\toCallable\GUICallable;

const JoinID = 0;

const JoinFSRID = 1;

const QuitID = 2;

const QxamineMyDataID = 3;

const MainGUIID = 4;

const MainSettingGUIID = 5;

class MiniatureS extends PluginBase implements Listener
{

    public $config, $gui, $BlickID, $addPlayerJoinTime, $TMsg, $DefaultMsg, $GUIShowList = [];

    public function onEnable()
    {
        // error_reporting(0);
        @date_default_timezone_set('Etc/GMT-8');
        $start = $this->getServer()->getPluginManager();
        $start->registerEvents(new PlayerEvent($this), $this);
        $start->registerEvents(new GUICallable($this), $this);
        $this->getServer()
            ->getPluginManager()
            ->registerEvents($this, $this);
        new Configs($this);
        $this->getLogger()->info(TextFormat::GOLD . $this->getName() . TextFormat::YELLOW . "插件已" . TextFormat::GREEN . "启动");
    }

    public function onCommand(CommandSender $player, Command $command, string $label, array $k): bool
    {
        $cmd = new MyCommand($this);
        $player->sendMessage($this->TMsg);
        $return = $cmd->onCmd($player, $command, $label, $k);
        if ($return === null || ($return !== false and $return !== true)) {
            return false;
        } else {
            return $return;
        }
    }
}
