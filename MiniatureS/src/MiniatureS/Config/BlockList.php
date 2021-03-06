<?php
namespace MiniatureS\Config;

use MiniatureS\MiniatureS;
use pocketmine\utils\Config;

class BlockList
{

    public function __construct(MiniatureS $plugin)
    {
        $plugin->BlickID = new Config($plugin->getDataFolder() . "/BlickIDList.yml", Config::YAML, $this->makeDefaultBlockIdAndName());
    }
/*
 * FFF团长给我的，我不知道他哪来的，有问题或者侵权请找我删除要打人请找FFF团长
 * 他的QQ：2641541097
 * */
    public function makeDefaultBlockIdAndName()
    {
        return array(
            "石头" => "1:0",
            "花岗岩" => "1:1",
            "磨制花岗岩" => "1:2",
            "闪长岩" => "1:3",
            "磨制闪长岩" => "1:4",
            "安山岩" => "1:5",
            "磨制安山岩" => "1:6",
            "草方块" => "2",
            "泥土" => "3",
            "圆石" => "4",
            "橡树木板" => "5:0",
            "云杉木板" => "5:1",
            "桦木板" => "5:2",
            "丛林树木板" => "5:3",
            "金合欢木板" => "5:4",
            "深色橡木木板" => "5:5",
            "橡树苗" => "6:0",
            "云杉树苗" => "6:1",
            "桦树苗" => "6:2",
            "丛林树苗" => "6:3",
            "金合欢树苗" => "6:4",
            "深色橡树苗" => "6:5",
            "基岩" => "7",
            "流动的水" => "8",
            "水" => "9",
            "流动的岩浆" => "10",
            "岩浆" => "11",
            "沙子" => "12",
            "红沙" => "12:1",
            "砾石" => "13",
            "金矿石" => "14",
            "铁矿石" => "15",
            "煤矿石" => "16",
            "橡木" => "17:0",
            "云杉木" => "17:1",
            "桦木" => "17:2",
            "丛林木" => "17:3",
            "橡树叶" => "18:0",
            "云杉叶" => "18:1",
            "桦树叶" => "18:2",
            "丛林树叶" => "18:3",
            "干海绵" => "19:0",
            "湿海绵" => "19:1",
            "玻璃" => "20",
            "青金石矿" => "21",
            "青金石块" => "22",
            "发射器" => "23",
            "沙石" => "24:0",
            "錾制沙石" => "24:1",
            "光滑沙石" => "24:2",
            "音符盒" => "25",
            "方块床" => "26",
            "动力铁轨" => "27",
            "探测铁轨" => "28",
            "粘性活塞" => "29",
            "蜘蛛网" => "30",
            "高草" => "31:0",
            "草" => "31:1",
            "蕨" => "31:2",
            "枯死的灌木" => "32",
            "活塞" => "33",
            "活塞臂" => "34",
            "白色羊毛" => "35:0",
            "橙色羊毛" => "35:1",
            "品红色羊毛" => "35:2",
            "淡蓝色羊毛" => "35:3",
            "黄色羊毛" => "35:4",
            "黄绿色羊毛" => "35:5",
            "粉红色羊毛" => "35:6",
            "灰色羊毛" => "35:7",
            "淡灰色羊毛" => "35:8",
            "青色羊毛" => "35:9",
            "紫色羊毛" => "35:10",
            "蓝色羊毛" => "35:11",
            "棕色羊毛" => "35:12",
            "绿色羊毛" => "35:13",
            "红色羊毛" => "35:14",
            "黑色羊毛" => "35:15",
            "黄花羊毛" => "37",
            "罂粟" => "38:0",
            "蓝色的兰花" => "38:1",
            "绒球葱" => "38:2",
            "茜草花" => "38:3",
            "红色郁金香" => "38:4",
            "橙色郁金香" => "38:5",
            "白色郁金香" => "38:6",
            "粉色郁金香" => "38:7",
            "滨菊" => "38:8",
            "棕色蘑菇" => "39",
            "红色蘑菇" => "40",
            "黄金块" => "41",
            "铁块" => "42",
            "双石台阶" => "43:0",
            "双沙石台阶" => "43:1",
            "双橡木台阶" => "43:2",
            "双圆石台阶" => "43:3",
            "双砖台阶" => "43:4",
            "双石砖台阶" => "43:5",
            "双石英台阶" => "43:6",
            "双地狱砖台阶" => "43:7",
            "石台阶" => "44:0",
            "沙石台阶" => "44:1",
            "橡木台阶" => "44:2",
            "圆石台阶" => "44:3",
            "砖台阶" => "44:4",
            "石砖台阶" => "44:5",
            "石英台阶" => "44:6",
            "地狱砖台阶" => "44:7",
            "砖" => "45",
            "TNT" => "46",
            "书架" => "47",
            "苔石" => "48",
            "黑曜石" => "49",
            "火把" => "50",
            "火" => "51",
            "刷怪笼" => "52",
            "橡木阶梯" => "53",
            "箱子" => "54",
            "红石粉" => "55",
            "钻石矿" => "56",
            "钻石块" => "57",
            "工作台" => "58",
            "农田" => "60",
            "熔炉" => "61",
            "梯子" => "65",
            "铁轨" => "66",
            "圆石阶梯" => "67",
            "拉杆" => "69",
            "石质压力板" => "70",
            "木质压力板" => "72",
            "红石矿" => "73",
            "发光的红石矿" => "74",
            "红石火把" => "75",
            "石质按钮" => "77",
            "顶层雪" => "78",
            "冰" => "79",
            "雪" => "80",
            "仙人掌" => "81",
            "粘土" => "82",
            "音乐盒" => "84",
            "橡木围墙" => "85:0",
            "云杉围墙" => "85:1",
            "桦木围墙" => "85:2",
            "丛林木围墙" => "85:3",
            "金合欢木围墙" => "85:4",
            "深色橡木围墙" => "85:5",
            "南瓜" => "86",
            "地狱岩" => "87",
            "灵魂沙" => "88",
            "萤石" => "89",
            "传送门" => "90",
            "南瓜灯" => "91",
            "蛋糕" => "92",
            "中继器" => "93",
            "隐形基岩" => "95",
            "木质陷阱门" => "96",
            "石头刷怪蛋" => "97:0",
            "圆石刷怪蛋" => "97:1",
            "石砖刷怪蛋" => "97:2",
            "苔石砖" => "98:1",
            "裂石砖" => "98:2",
            "錾制石砖" => "98:3",
            "棕色蘑菇块" => "99",
            "红色蘑菇块" => "100",
            "铁栏杆" => "101",
            "玻璃板" => "102",
            "西瓜" => "103",
            "南瓜梗" => "104",
            "藤蔓" => "106",
            "橡木围墙大门" => "107",
            "砖块阶梯" => "108",
            "石砖阶梯" => "109",
            "菌丝" => "110",
            "睡莲" => "111",
            "地狱砖" => "112",
            "地狱砖围墙" => "113",
            "地狱砖阶梯" => "114",
            "附魔台" => "116",
            "酿造台" => "117",
            "炼药锅" => "118",
            "末地门" => "119",
            "末地传送门" => "120",
            "末地石" => "121",
            "龙蛋" => "122",
            "红石灯" => "123",
            
            "沙石阶梯" => "128",
            "绿宝石矿石" => "129",
            "末影箱" => "130",
            "拌线钩" => "131",
            "拌线" => "132",
            "绿宝石块" => "133",
            "云杉木阶梯" => "134",
            "桦木阶梯" => "135",
            "丛林木阶梯" => "136",
            "命令方块" => "137",
            "信标" => "138",
            "圆石墙" => "139",
            "苔石墙" => "139:1",
            "花盆" => "140",
            "胡萝卜" => "141",
            "土豆" => "142",
            "木质按钮" => "143",
            "铁砧" => "145:0",
            "轻微损坏的铁砧" => "145:4",
            "严重损坏的铁砧" => "145:8",
            "陷阱箱" => "146",
            "重力压力板(轻型)" => "147",
            "重力压力板(重型)" => "148",
            "比较器" => "149",
            "阳光传感器" => "151",
            "红石块" => "152",
            "地狱石英矿石" => "153",
            "漏斗" => "154",
            "石英块" => "155:0",
            "竖纹石英块" => "155:1",
            "錾制石英块" => "155:2",
            "石英阶梯" => "156",
            
            "橡木台阶" => "158:0",
            "云杉木台阶" => "158:1",
            "桦木台阶" => "158:2",
            "丛林木台阶" => "158:3",
            "金合欢木台阶" => "158:4",
            "深色橡木台阶" => "158:5",
            "白色粘土" => "159:0",
            "橙色粘土" => "159:1",
            "品红色粘土" => "159:2",
            "淡蓝色粘土" => "159:3",
            "黄色粘土" => "159:4",
            "黄绿色粘土" => "159:5",
            "粉红色粘土" => "159:6",
            "灰色粘土" => "159:7",
            "淡灰色粘土" => "159:8",
            "青色粘土" => "159:9",
            "紫色粘土" => "159:10",
            "蓝色粘土" => "159:11",
            "棕色粘土" => "159:12",
            "绿色粘土" => "159:13",
            "红色粘土" => "159:14",
            "黑色粘土" => "159:15",
            "白色玻璃板" => "160:0",
            "橙色玻璃板" => "160:1",
            "品红色玻璃板" => "160:2",
            "淡蓝色玻璃板" => "160:3",
            "黄色玻璃板" => "160:4",
            "黄绿色玻璃板" => "160:5",
            "粉红色玻璃板" => "160:6",
            "灰色玻璃板" => "160:7",
            "淡灰色玻璃板" => "160:8",
            "青色玻璃板" => "160:9",
            "紫色玻璃板" => "160:10",
            "蓝色玻璃板" => "160:11",
            "棕色玻璃板" => "160:12",
            "绿色玻璃板" => "160:13",
            "红色玻璃板" => "160:14",
            "黑色玻璃板" => "160:15",
            "金合欢叶" => "161:0",
            "深色橡树叶" => "161:1",
            "金合欢木" => "162:0",
            "深色橡木" => "162:1",
            "金合欢木阶梯" => "163",
            "深色橡木阶梯" => "164",
            "粘液块" => "165",
            "铁门" => "167",
            "海晶石" => "168:0",
            "暗海晶石" => "168:1",
            "海晶石砖" => "168:2",
            "海晶灯" => "169",
            "干草捆" => "170",
            "白色地毯" => "171:0",
            "橙色地毯" => "171:1",
            "品红色地毯" => "171:2",
            "淡蓝色地毯" => "171:3",
            "黄色地毯" => "171:4",
            "黄绿色地毯" => "171:5",
            "粉红色地毯" => "171:6",
            "灰色地毯" => "171:7",
            "淡灰色地毯" => "171:8",
            "青色地毯" => "171:9",
            "紫色地毯" => "171:10",
            "蓝色地毯" => "171:11",
            "棕色地毯" => "171:12",
            "绿色地毯" => "171:13",
            "红色地毯" => "171:14",
            "黑色地毯" => "171:15",
            "硬化粘土" => "172",
            "煤炭块" => "173",
            "浮冰" => "174",
            "向日葵" => "175:0",
            "丁香" => "175:1",
            "高草丛" => "175:2",
            "大型蕨" => "175:3",
            "玫瑰丛" => "175:4",
            "牡丹" => "175:5",
            "旗帜" => "176",
            "悬挂的旗帜" => "177",
            "阳光传感器" => "178",
            "红沙石" => "179:0",
            "錾制红沙石" => "179:1",
            "平滑红沙石" => "179:2",
            "红沙石阶梯" => "180",
            "红沙石台阶" => "182:0",
            "紫珀台阶" => "182:1",
            "云杉围墙大门" => "183",
            "桦木围墙大门" => "184",
            "丛林木围墙大门" => "185",
            "深色橡木围墙大门" => "186",
            "金合欢木围墙大门" => "187",
            "重复命令块" => "188",
            "链命令块" => "189",
            "云杉木门" => "193",
            "桦木门" => "194",
            "丛林木门" => "195",
            "金合欢木门" => "196",
            "深色橡木门" => "197",
            "绿茵小道" => "198",
            "展示框" => "199",
            "合唱花" => "200",
            "紫珀方块" => "201:0",
            "紫珀柱子" => "201:2",
            "紫珀阶梯" => "203",
            "潜匿之贝箱子" => "205",
            "末地石砖" => "206",
            "末地棒" => "208",
            "末地门2" => "209",
            "岩浆方块" => "213",
            "地狱疣方块" => "214",
            "红石地狱砖" => "215",
            "骨头方块" => "216",
            "白色潜匿之贝箱子" => "218:0",
            "橙色潜匿之贝箱子" => "218:1",
            "品红色潜匿之贝箱子" => "218:2",
            "淡蓝色潜匿之贝箱子" => "218:3",
            "黄色潜匿之贝箱子" => "218:4",
            "黄绿色潜匿之贝箱子" => "218:5",
            "粉色潜匿之贝箱子" => "218:6",
            "浅灰色潜匿之贝箱子" => "218:7",
            "灰色潜匿之贝箱子" => "218:8",
            "青色潜匿之贝箱子" => "218:9",
            "紫色潜匿之贝箱子" => "218:10",
            "蓝色潜匿之贝箱子" => "218:11",
            "棕色潜匿之贝箱子" => "218:12",
            "绿色潜匿之贝箱子" => "218:13",
            "红色潜匿之贝箱子" => "218:14",
            "黑色潜匿之贝箱子" => "218:15",
            "紫色带釉陶瓦" => "219",
            "白色带釉陶瓦" => "220",
            "橙色色带釉陶瓦" => "221",
            "品红色带釉陶瓦" => "222",
            "带淡蓝釉陶瓦" => "223",
            "黄色带釉陶瓦" => "224",
            "黄绿色带釉陶瓦" => "225",
            "粉红色带釉陶瓦" => "226",
            "灰色带釉陶瓦" => "227",
            "淡灰色带釉陶瓦" => "228",
            "青色带釉陶瓦" => "229",
            "蓝色带釉陶瓦" => "231",
            "棕色带釉陶瓦" => "232",
            "绿色带釉陶瓦" => "233",
            "红色带釉陶瓦" => "234",
            "黑色带釉陶瓦" => "235",
            "白色混凝土" => "236:0",
            "橙色混凝土" => "236:1",
            "品红色混凝土" => "236:2",
            "淡蓝色混凝土" => "236:3",
            "黄色混凝土" => "236:4",
            "黄绿色混凝土" => "236:5",
            "粉红色混凝土" => "236:6",
            "灰色混凝土" => "236:7",
            "淡灰色混凝土" => "236:8",
            "青色混凝土" => "236:9",
            "紫色混凝土" => "236:10",
            "蓝色混凝土" => "236:11",
            "棕色混凝土" => "236:12",
            "绿色混凝土" => "236:13",
            "红色混凝土" => "236:14",
            "黑色混凝土" => "236:15",
            "白色混凝土粉末" => "237:0",
            "橙色混凝土粉末" => "237:1",
            "品红色混凝土粉末" => "237:2",
            "淡蓝色混凝土粉末" => "237:3",
            "黄色混凝土粉末" => "237:4",
            "黄绿色混凝土粉末" => "237:5",
            "粉红色混凝土粉末" => "237:6",
            "灰色混凝土粉末" => "237:7",
            "淡灰色混凝土粉末" => "237:8",
            "青色混凝土粉末" => "237:9",
            "紫色混凝土粉末" => "237:10",
            "蓝色混凝土粉末" => "237:11",
            "棕色混凝土粉末" => "237:12",
            "绿色混凝土粉末" => "237:13",
            "红色混凝土粉末" => "237:14",
            "黑色混凝土粉末" => "237:15",
            "共鸣植物" => "240",
            "白色玻璃" => "241:0",
            "橙色玻璃" => "241:1",
            "品红色玻璃" => "241:2",
            "淡蓝色玻璃" => "241:3",
            "黄色玻璃" => "241:4",
            "黄绿色玻璃" => "241:5",
            "粉红色玻璃" => "241:6",
            "灰色玻璃" => "241:7",
            "淡灰色玻璃" => "241:8",
            "青色玻璃" => "241:9",
            "紫色玻璃" => "241:10",
            "蓝色玻璃" => "241:11",
            "棕色玻璃" => "241:12",
            "绿色玻璃" => "241:13",
            "红色玻璃" => "241:14",
            "黑色玻璃" => "241:15",
            "灰化土" => "243",
            "切石机" => "245",
            "发光的黑曜石" => "246",
            "下界反应核(蓝)" => "247:0",
            "下界反应核(红)" => "247:1",
            "下界反应核(黑)" => "247:2",
            "观察者" => "251",
            
            /*----------------- ITEMS -----------------*/
            
            "铁锹" => "256",
            "铁镐" => "257",
            "铁斧" => "258",
            "打火石" => "259",
            "苹果" => "260",
            "弓" => "261",
            "箭" => "262",
            "煤炭" => "263:0",
            "木炭" => "263:1",
            "钻石" => "264",
            "铁锭" => "265",
            "金锭" => "266",
            "铁剑" => "267",
            "木剑" => "268",
            "木锹" => "269",
            "木镐" => "270",
            "木斧" => "271",
            "石剑" => "272",
            "石锹" => "273",
            "石镐" => "274",
            "石斧" => "275",
            "钻石剑" => "276",
            "钻石锹" => "277",
            "钻石镐" => "278",
            "钻石斧" => "279",
            "木棍" => "280",
            "碗" => "281",
            "蘑菇煲" => "282",
            "金剑" => "283",
            "金锹" => "284",
            "金镐" => "285",
            "金斧" => "286",
            "蛛丝" => "287",
            "羽毛" => "288",
            "火药" => "289",
            "木锄" => "290",
            "石锄" => "291",
            "铁锄" => "292",
            "钻石锄" => "293",
            "金锄" => "294",
            "种子" => "295",
            "小麦" => "296",
            "面包" => "297",
            "皮革头盔" => "298",
            "皮革胸甲" => "299",
            "皮革护腿" => "300",
            "皮革靴子" => "301",
            "锁链头盔" => "302",
            "锁链胸甲" => "303",
            "锁链护腿" => "304",
            "锁链靴子" => "305",
            "铁头盔" => "306",
            "铁胸甲" => "307",
            "铁护腿" => "308",
            "铁靴子" => "309",
            "钻石头盔" => "310",
            "钻石胸甲" => "311",
            "钻石护腿" => "312",
            "钻石靴子" => "313",
            "金头盔" => "314",
            "金胸甲" => "315",
            "金护腿" => "316",
            "金靴子" => "317",
            "燧石" => "318",
            "生猪排" => "319",
            "熟猪排" => "320",
            "画" => "321",
            "金苹果" => "322",
            "告示牌" => "323",
            "橡木门" => "324",
            "桶" => "325:0",
            "牛奶桶" => "325:1",
            "水桶" => "325:8",
            "岩浆桶" => "325:10",
            "矿车" => "328",
            "鞍" => "329",
            "铁门" => "330",
            "红石" => "331",
            "雪球" => "332",
            "橡木船" => "333:0",
            "云杉木船" => "333:1",
            "桦木船" => "333:2",
            "丛林木船" => "333:3",
            "金合欢木船" => "333:4",
            "深色橡木船" => "333:5",
            "皮革" => "334",
            "砖" => "336",
            "粘土球" => "337",
            "甘蔗" => "338",
            "纸" => "339",
            "书" => "340",
            "粘液球" => "341",
            "箱子矿车" => "342",
            "漏斗矿车" => "343",
            "鸡蛋" => "344",
            "指南针" => "345",
            "鱼竿" => "346",
            "时钟" => "347",
            "荧石粉" => "348",
            "鱼" => "349",
            "熟鱼" => "350",
            "墨囊" => "351:0",
            "品红色染料" => "351:1",
            "绿色染料" => "351:2",
            "可可豆" => "351:3",
            "蓝色染料" => "351:4",
            "紫色染料" => "351:5",
            "青色染料" => "351:6",
            "淡灰色染料" => "351:7",
            "灰色染料" => "351:8",
            "粉红色染料" => "351:9",
            "黄绿色染料" => "351:10",
            "黄色染料" => "351:11",
            "淡蓝色染料" => "351:12",
            "红色染料" => "351:13",
            "橙色染料" => "351:14",
            "骨粉" => "351:15",
            "骨头" => "352",
            "糖" => "353",
            "蛋糕" => "354",
            "床" => "355",
            "中继器" => "356",
            "曲奇" => "357",
            "地图(满)" => "358",
            "剪刀" => "359",
            "西瓜" => "360",
            "南瓜种子" => "361",
            "南瓜种子" => "362",
            "生牛肉" => "363",
            "熟牛肉" => "364",
            "生鸡肉" => "365",
            "熟鸡肉" => "366",
            "腐肉" => "367",
            "末影珍珠" => "368",
            "烈焰棒" => "369",
            "恶魂泪" => "370",
            "金粒" => "371",
            "地狱疣" => "372",
            
            "水瓶" => "373:0",
            "平凡的药水" => "373:1",
            "长久平凡的药水" => "373:2",
            "浓稠的药水" => "373:3",
            "粗制的药水" => "373:4",
            "夜视药水" => "373:6",
            "隐身药水" => "373:8",
            "跳跃药水" => "373:11",
            "抗火药水" => "373:13",
            "迅捷药水" => "373:16",
            "缓慢药水" => "373:18",
            "水肺药水" => "373:20",
            "治疗药水" => "373:22",
            "伤害药水" => "373:24",
            "剧毒药水" => "373:27",
            "生命恢复药水" => "373:30",
            "力量药水" => "373:33",
            "虚弱药水" => "373:35",
            "衰变药水" => "373:36",
            
            "玻璃瓶" => "374",
            "蜘蛛眼" => "375",
            "发酵蜘蛛眼" => "376",
            "烈焰粉" => "377",
            "岩浆膏" => "378",
            "酿造台" => "379",
            "炼药锅" => "380",
            "末影之眼" => "381",
            "金西瓜" => "382",
            
            /*----------------- ModsEgg -----------------*/
            
            "经验瓶" => "384",
            "火球" => "385",
            "绿宝石" => "388",
            "展示框" => "389",
            "花盆" => "390",
            "胡萝卜" => "391",
            "马铃薯" => "392",
            "烤马铃薯" => "393",
            "毒马铃薯" => "394",
            "空地图" => "395",
            "金胡萝卜" => "396",
            
            "骷髅头" => "397:0",
            "凋零骷髅头" => "397:1",
            "僵尸头" => "397:2",
            "史蒂夫头" => "397:3",
            "苦力怕头" => "397:4",
            "龙头" => "397:5",
            
            "胡萝卜杆" => "398",
            "下届之星" => "399",
            "南瓜派" => "400",
            "附魔书" => "403",
            "比较器" => "404",
            "地狱砖" => "405",
            "地狱石英" => "406",
            "tnt矿车" => "407",
            "漏斗矿车" => "408",
            "海晶碎片" => "409",
            "海晶灯粉" => "410",
            "生兔子肉" => "411",
            "熟兔子肉" => "412",
            "兔子煲" => "413",
            "兔子脚" => "414",
            "兔子皮" => "415",
            "皮革马鞍" => "416",
            "铁马鞍" => "417",
            "金马鞍" => "418",
            "钻石马鞍" => "419",
            "栓绳" => "420",
            "命名牌" => "421",
            "命令方块矿车" => "422",
            "生羊肉" => "423",
            "熟羊肉" => "424",
            "末影水晶" => "426",
            "云杉木门" => "427",
            "桦树木门" => "428",
            "丛林木门" => "429",
            "金合欢木门" => "430",
            "深色橡木门" => "431",
            "共鸣果" => "432",
            "爆裂共鸣果" => "433",
            "龙息" => "437",
            
            "喷溅的水瓶" => "438:0",
            "喷溅的平凡的药水" => "438:1",
            "喷溅的长久平凡的药水" => "438:2",
            "喷溅的浓稠的药水" => "438:3",
            "喷溅的粗制的药水" => "438:4",
            "喷溅的夜视药水" => "438:6",
            "喷溅的隐身药水" => "438:8",
            "喷溅的跳跃药水" => "438:11",
            "喷溅的抗火药水" => "438:13",
            "喷溅的迅捷药水" => "438:16",
            "喷溅的缓慢药水" => "438:18",
            "喷溅的水肺药水" => "438:20",
            "喷溅的治疗药水" => "438:22",
            "喷溅的伤害药水" => "438:24",
            "喷溅的剧毒药水" => "438:27",
            "喷溅的生命恢复药水" => "438:30",
            "喷溅的力量药水" => "438:33",
            "喷溅的虚弱药水" => "438:35",
            "喷溅的衰变药水" => "438:36",
            
            "遗留的水瓶" => "441:0",
            "遗留的平凡的药水" => "441:1",
            "遗留的长久平凡的药水" => "441:2",
            "遗留的浓稠的药水" => "441:3",
            "遗留的粗制的药水" => "441:4",
            "遗留的夜视药水" => "441:6",
            "遗留的隐身药水" => "441:8",
            "遗留的跳跃药水" => "441:11",
            "遗留的抗火药水" => "441:13",
            "遗留的迅捷药水" => "441:16",
            "遗留的缓慢药水" => "441:18",
            "遗留的水肺药水" => "441:20",
            "遗留的治疗药水" => "441:22",
            "遗留的伤害药水" => "441:24",
            "遗留的剧毒药水" => "441:27",
            "遗留的生命恢复药水" => "441:30",
            "遗留的力量药水" => "441:33",
            "遗留的虚弱药水" => "441:35",
            "遗留的衰变药水" => "441:36",
            
            "翅鞘" => "444",
            "潜匿之壳" => "445",
            "甜菜根" => "457",
            "甜菜种子" => "458",
            "甜菜根汤" => "459",
            "生鲑鱼" => "460",
            "小丑鱼" => "461",
            "河豚" => "462",
            "熟鲑鱼" => "463",
            "附魔的金苹果" => "466"
        );
    }
}