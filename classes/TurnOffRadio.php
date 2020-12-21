<?php

class TurnOffRadio implements RadioCommand
{
    private $radioControl;

    public function __construct(RadioControl $radioControl)
    {
        $this->radioControl = $radioControl;
    }

    public function execute()
    {
        $this->radioControl->turnOff();
    }
}