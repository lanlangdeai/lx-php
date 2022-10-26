<?php

interface Mobile
{
    public function openApp($name);
}



class Iphone12 implements Mobile
{
    public function openApp($name)
    {
        echo __CLASS__.'打开'.$name;
    }
}

class Mi11 implements Mobile
{
    public function openApp($name)
    {
        echo __CLASS__.'open'.$name;
    }
}

class Lx
{
    public function Look(Mobile $phone)
    {
        $phone->openApp('douyin');
    }
}


(new Lx())->Look(new Iphone12());
(new Lx())->Look(new Mi11());










