<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function ourTeam(){
        $team = array("Name: Habib, Md Amir  Id: 19-41429-3","Name: Natasha, Hazera Sabiha  Id: 19-39671-1", "Name: Hossan, Md Riyaz  Id: 19-41432-3 ", "Name: Rahman  Nafiur, Id: 19-41457-3");
        return view('team')
        ->with('team', $team);
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function contactUs(){
        return view('contactUs');
    }
}
