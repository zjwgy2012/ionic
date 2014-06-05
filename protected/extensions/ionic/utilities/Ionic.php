<?php

class Ionic{

    /*
     * 因为重复这样做事愚蠢的
     * @params mixed $data 要debug的信息
     * @params bool $full_dump 是否打出详细信息
     * */
    public static function debug($data,$full_dump = false)
    {
        echo '<pre>';
        if($full_dump)
            var_dump($data);
        else
            print_r($data);
        echo '</pre>';
        return;
    }
}

