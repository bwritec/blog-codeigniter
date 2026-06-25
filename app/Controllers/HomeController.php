<?php

    namespace App\Controllers;


    /**
     *
     */
    class HomeController extends BaseController
    {
        public function index(): string
        {
            $theme_name = env('app.theme');

            return view('themes/'. $theme_name .'/index.php');
        }
    }
