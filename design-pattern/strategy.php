<?php

/**
 * Class baseClass
 * 策略模式是对象的行为模式，动态的选择需要调用的类。
        策略模式三个角色：
        抽象策略角色
        具体策略角色
        环境角色
        策略模式实现步骤：
        定义抽象角色类
        定义具体策略类
        定义环境角色类
 */




# 1. 定义抽象角色类
abstract class baseClass
{
    abstract function printPage();
}

# 2. 定义具体策略类
class Page extends baseClass
{
    function printPage()
    {
        echo '360';
    }
}
class aliPage extends baseClass
{
    function printPage()
    {
        echo 'ali';
    }
}

# 3. 定义环境角色类
class echoClass{
    public function echo(baseClass $object)
    {
        return $object->printPage();
    }
}

# 4. 实现
$obj = new echoClass();
$obj->echo( new Page() );
