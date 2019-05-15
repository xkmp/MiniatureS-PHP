<?php
namespace MiniatureS\GUI;

use MiniatureS\MiniatureS;
use const MiniatureS\MainGUIID;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use jojoe77777\FormAPI\SimpleForm;
class makeMainGUI
{

    private $plugin;

    public function __construct(MiniatureS $plugin)
    {
        $this->plugin = $plugin;
    }
    public function makeMainGUI(Player $player)
    {
        $plugin = $this->plugin;
        $gui = new SimpleForm(MainGUIID,function (Player $player ,array $data){});
        $gui->setTitle(TextFormat::GOLD . $plugin->getName());
        $gui_config = $plugin->gui->getAll();
        foreach ($gui_config as $gg) {
            $data = null;
            $type = 0;
            if (@$gg["image"]["type"] !== null and ($gg["image"]["type"]===0 or $gg["image"]["type"]===1)) {
                $type = $gg["image"]["type"];
            }
            if (@$gg["image"]["data"] !== null) {
                $data = $gg["image"]["data"];
            }
            $gui->addButton($gg["text"], $type, $data,$gg["file"]);
        }
        if ($player->isOp()) {
            $gui->addButton(TextFormat::RED . "设置管理",0, "textures/blocks/tnt_side.png","setting");
        }
        $gui->SendToPlayer($player);
        $plugin->GUIShowList[$player->getName()]=true;
    }
}