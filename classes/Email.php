<?php

class Email implements EmailBodyInterface
{

    public function loadBody()
    {
        echo "This is Main email body<br>";
    }
}