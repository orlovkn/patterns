<?php

class NewYearEmailBody extends EmailBodyDecorator
{

    public function loadBody()
    {
        echo "This is extra content for New Year<br>";
        $this->emailBody->loadBody();
    }
}