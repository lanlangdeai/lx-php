<?php

interface Observer
{
    function update();
}



abstract class EventGenerator
{
    private $observers = [];

    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }
}

class Event extends EventGenerator
{
    function trigger()
    {
        echo "event";
    }
}


class Observer1 implements Observer{
    function update(){
        echo "逻辑 1<br>";
    }
}

class Observer2 implements Observer{
    function update(){
        echo "逻辑 2<br>";
    }
}


$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();
$event->notify();



