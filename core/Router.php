<?php
session_start();

class Router
{
    public static function navigate()
    {
        if (Authentication::register()) {
            Pager::loadRegister();
        } else if (Authentication::login()) {
            Pager::loadLogin();
        } else {
            Authentication::signUP();
            Authentication::authenticate();
            Pager::load();
        }
    }
}