<?php

namespace App\Http\Controllers;
use App\Models\History;
use App\Models\Member;
use App\Models\Product;


class HomeController extends Controller
{
    public function showHomePage() {
        $members = Member::all();
        return view('pages.home', compact('members'));
    }
}
