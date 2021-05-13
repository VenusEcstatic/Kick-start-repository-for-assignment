<?php

class item
{

    private $price;
    static $ABA;
    static $PiWing;

    function assign($quantity, $method, $price)
    {
        if ($method === 'ABA') {
            self::$ABA += $quantity;
        } else if ($method === 'Wing' || $method === 'PiPay') {
            self::$PiWing += $quantity;
        }
    }

    public static function get_ABA()
    {
        return self::$ABA;
    }

    public static function get_piWing()
    {
        return self::$PiWing;
    }
}
item::$ABA = 0;
item::$PiWing = 0;

$item1 = new item();
$item1->assign(1, 'ABA', 5);

$item2 = new item();
$item2->assign(2, 'Wing', 3);

$item3 = new item();
$item3->assign(1, 'ABA', 4);

$item4 = new item();
$item4->assign(1, 'ABA', 5);

$item5 = new item();
$item5->assign(1, 'PiPay', 6);

$item6 = new item();
$item6->assign(1, 'ABA', 10);

$item7 = new item();
$item7->assign(1, 'Wing', 15);

$item8 = new item();
$item8->assign(1, 'Wing', 2);


echo "1. Numbers of sales by ABA method " . item::get_ABA() . "\n";
echo "2. Numbers of sales by Wing or PiPay method " . item::get_piWing() . "\n";
echo "3. List of item \n";
