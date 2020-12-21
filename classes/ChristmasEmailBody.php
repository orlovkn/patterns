<?php

class ChristmasEmailBody extends EmailBodyDecorator
{
    public function loadBody()
    {
        echo "This is extra content for Xmas<br>";
        $this->emailBody->loadBody();
    }
}