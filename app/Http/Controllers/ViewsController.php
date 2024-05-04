<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ViewsController extends Controller
{
    public function home(): View
    {
      return view('pages.user.home', [
        "title" => "Home"
      ]);
    }
}
