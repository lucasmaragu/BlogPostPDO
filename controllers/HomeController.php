<?php

namespace controllers;

class HomeController
{
    public function index()
    {
        
        require_once __DIR__ . '/../views/home.php';
    }
}