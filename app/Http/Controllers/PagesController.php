<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function about()
    {
        // set giá trị vào mảng
        $data = [];
        $data["first_name"] = "Lady";
        $data["last_name"] = "Gaga";

        // truyền mảng vào đối số thứ 2 hàm view
        return view('pages.about', compact(['data']));

        /* Trước khi sửa
        return view('pages.about');
        */
    }

    // ...
}