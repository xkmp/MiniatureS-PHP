<?php
namespace MiniatureS\toCallable;

use MiniatureS\MiniatureS;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\ModalFormResponsePacket;
use MiniatureS\GUI\DefaultGUI;

class GUICallable implements Listener
{
    private $plugin;

    public function __construct(MiniatureS $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onReceive(DataPacketReceiveEvent $e)
    {
        $plugin=$this->plugin;
        $pk = $e->getPacket();
        $player = $e->getPlayer();
        if (! ($pk instanceof ModalFormResponsePacket)) {
            return;
        }
        $id = $pk->formId;
        $data = json_decode($pk->formData);
        if(@$plugin->GUIShowList[$player->getName()]===true and $id!==null and $data!==null){
            switch ($id){
                case 4:
                    unset($plugin->GUIShowList[$player->getName()]);
                    new DefaultGUI($plugin, $player, $data);
                    break;
            }
        }
    }
    
}
?>