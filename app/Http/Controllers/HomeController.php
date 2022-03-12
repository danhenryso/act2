<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controllers
{
function testRequest(Request $req)
{
    return $req->input();
}

}