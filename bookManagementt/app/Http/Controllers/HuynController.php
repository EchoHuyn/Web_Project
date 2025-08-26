<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuynController extends Controllers
{
    public function index(): View
    {
        $name = 'Huyn.......';
        echo $name;

        $age = 0;
        echo $age;

        if ($age >= 18) {
            echo "Người lớn";
        } else {
            echo "Trẻ em";
        }

        return view(view: 'HuynView');
    }
}
