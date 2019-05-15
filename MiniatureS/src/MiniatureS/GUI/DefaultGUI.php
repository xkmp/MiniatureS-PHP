<?php
namespace MiniatureS\GUI;

use MiniatureS\MiniatureS;
use const MiniatureS\MainGUIID;
use pocketmine\Player;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\utils\TextFormat;
use const MiniatureS\MainSettingGUIID;

class DefaultGUI
{

    private $plugin;

    public function __construct(MiniatureS $plugin, Player $player, int $id)
    {
        $this->plugin = $plugin;
        $guiC = $plugin->gui->getAll();
        if ($id == count($guiC)) {
            $this->makeSettingGUI($player);
        } else {
            switch ($guiC[$id]["file"]) {
                case "xiaokai":
                    $gui = new SimpleForm(645156616435135, function (Player $player, array $a) {});
                    $gui->setTitle($guiC[$id]["text"]);
                    $gui->setContent("本插插件由么么哒滴帅逼凯编写！\n\n\n您好，这是个辣鸡插件，如果您想喷，抱歉我只能告诉你要么删游戏要么滚蛋\n\n要修改要模仿要复制代码随意，给我留点底别直接改我现在这个插件的版权就好了，感激不尽\n\n小凯QQ：2508543202\n\n如果您想写插件可以来找我\n\n最后，下面那个按钮上面的字读\"gai\",不读\"jie\"");
                    $gui->addButton(TextFormat::WHITE . "了解");
                    $gui->sendToPlayer($player);
                    break;
                case "help":
                    $gui = new SimpleForm(645156435135, function (Player $player, array $a) {});
                    $gui->setTitle($guiC[$id]["text"]);
                    $gui->setContent(TextFormat::RED . "我是帅比凯帅逼凯\n\n\n\n" . TextFormat::GOLD . "你看毛看啊你\n" . TextFormat::AQUA . "毛都没一个");
                    $gui->addButton(TextFormat::WHITE . "好的");
                    $gui->sendToPlayer($player);
                    break;
            }
        }
    }

    public function makeSettingGUI(Player $player)
    {
        $k = $this->getSetttingButtonData();
        $gui = new SimpleForm(MainSettingGUIID, function (Player $player, array $a) {});
        $gui->setTitle(TextFormat::GOLD . $this->plugin->getName() . TextFormat::GRAY . "设置");
        foreach ($k as $ks) {
            $gui->addButton($ks["text"], $ks["image"]["type"], $ks["image"]["data"]);
        }
        $gui->sendToPlayer($player);
    }

    public function getSetttingButtonData()
    {
        return array(
            array(
                "file" => "addButton",
                "text" => TextFormat::GREEN . "添加主页按钮",
                "image" => array(
                    "type" => 0,
                    "data" => "textures/ui/newOffersIcon.png"
                )
            ),
            array(
                "file" => "delButton",
                "text" => TextFormat::RED . "删除主页按钮",
                "image" => array(
                    "type" => 0,
                    "data" => "textures/ui/realms_red_x.png"
                )
            )
        );
    }
}
?>