<?php


/**
 * 定义人类接口
 * Interface people
 */
interface people
{
    public function say();
}

/**
 * 类的实现
 * Class man
 */
class man implements people
{
    public function say()
    {
        // TODO: Implement say() method.
        echo 'man';
    }

}

/**
 * 类的实现
 * Class woman
 */
class woman implements people
{
    public function say()
    {
        // TODO: Implement say() method.
        echo 'woman';
    }

}


class singleFactory
{
    static function man()
    {
        return new man();
    }

    static function woman()
    {
        return new woman();
    }
}

$man = singleFactory::man();
$man->say();


