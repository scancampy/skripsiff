<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = array();
        return view('v_login', $data);
    }
}
