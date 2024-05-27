<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaistBagController extends Controller
{
    public $keys;

    public function __construct($keys)
    {
        $this->keys = $keys;
    }

    public function show() {
        echo $this->keys;
    }

    public function open() {
        echo 'nothing inside the bag';
    }
}

$res = new WaistBagController('Ключи от дома');
echo $res->show();
