<?php
namespace MiniatureS\Config;

use MiniatureS\MiniatureS;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class Configs
{

    public function DefaultConfig($plugin)
    {
        $plugin->addPlayerJoinTime = array();
    }

    public function __construct(MiniatureS $plugin)
    {
        $this->DefaultConfig($plugin);
        @mkdir($plugin->getDataFolder(), 0777, true);
        new BlockList($plugin);
        @mkdir($plugin->getDataFolder() . "/Player/", 0777, true);
        @mkdir($plugin->getDataFolder() . "/GUI/", 0777, true);
        $plugin->DefaultMsg = new Config($plugin->getDataFolder() . "/DefaultMsg.yml", Config::YAML, array(
            "无权限执行命令" => TextFormat::RED . TextFormat::DARK_RED . "你没有权限执行此命令！",
            "未开启玩家记录" => TextFormat::RED . TextFormat::DARK_RED . "此服务器禁用了该功能！"
        ));
        $plugin->gui = new Config($plugin->getDataFolder() . "/GUI.yml", Config::YAML, array(
            array(
                "file" => "help",
                "text" => TextFormat::GREEN . "使用帮助",
                "image" => array(
                    "type" => 0,
                    "data" => "textures/ui/absorption_effect.png"
                )
            ),
            array(
                "file" => "xiaokai",
                "text" => TextFormat::GREEN . "关于插件",
                "image" => array(
                    "type" => 1,
                    "data" => "http://xiaokai.gotoip11.com/xk.jpg"
                )
            )
        ));
        $guis = $plugin->gui->getAll();
        foreach ($guis as $gui) {
            switch (! $gui["file"]) {
                case "help":
                case "cmd":
                case "xiaokai":
                    new Config($plugin->getDataFolder() . "/GUI/" . $gui["file"] . ".yml", Config::YAML, array());
                    break;
            }
        }
        $plugin->config = new Config($plugin->getDataFolder() . "/Config.yml", Config::YAML, array(
            "记录玩家信息" => TRUE,
            "点击打开GUI" => array(
                "点击打开GUI" => TRUE,
                "被点击方块" => "57:0",
                "手持物品" => "280:0",
                "撤销点击事件" => true
            ),
            "点击查看记录数据" => array(
                "点击查看记录数据" => TRUE,
                "被点击方块" => "2:0",
                "手持物品" => "280:0",
                "撤销点击事件" => true
            ),
            "提示头信息" => TextFormat::YELLOW . "[" . TextFormat::BLUE . $plugin->getName() . TextFormat::YELLOW . "]",
            "进服提示" => array(
                "撤销默认通知" => true,
                "进服提示" => true,
                "全服广播" => true,
                "广播内容" => TextFormat::YELLOW . "欢迎" . TextFormat::DARK_BLUE . "{name}" . TextFormat::YELLOW . "来到" . TextFormat::BLUE . $plugin->getServer()->getName() . TextFormat::YELLOW . '服务器\n' . TextFormat::YELLOW . '请遵守服务器规则哟~\n' . TextFormat::YELLOW . '祝您玩的开心\n' . TextFormat::GREEN . "(*^▽^*)",
                "提示内容" => TextFormat::YELLOW . "欢迎来到" . TextFormat::BLUE . $plugin->getServer()->getName() . TextFormat::YELLOW . "服务器",
                "提示方式" => "Msg",
                "广播方式" => "Msg"
            ),
            "退出提示" => array(
                "退出提示" => true,
                "撤销默认通知" => true,
                "提示内容" => TextFormat::YELLOW . TextFormat::DARK_BLUE . "{name}" . TextFormat::RED . "离开了服务器",
                "提示方式" => "Msg"
            )
        ));
        $plugin->TMsg = $plugin->config->get("提示头信息");
    }
}