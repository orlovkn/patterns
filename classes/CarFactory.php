<?php

class CarFactory
{
    public static function build($type = "")
    {
        if ($type == '') {
            throw new Exception('Invalid Car Type');
        } else {
            $classMame = 'Car_' . ucfirst($type);
            if (class_exists($classMame)) {
                return new $classMame;
            } else {
                throw new Exception('Car type not found');
            }
        }
    }
}