<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function hello()
    {
        return 'hello';
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function pics()
    {
        return view('pics');
    }

    public function demo(Request $request)
    {
        // dd($request->all());
        // dd($request->except('x', 'y'));
        dd($request->input('x', 'x100'));
        // 第一種
        // return view('test.demo')->with(['name' => '小智', 'age' => '<b>10</b>']);
        // 第二種
        // $date = [];
        // $date['name'] = '小智';
        // $date['age'] = '<b>10</b>';
        // return view('test.demo', $date);
        // 第三種
        $name = '小智';
        $age = '<b>10</b>';
        $games = ['PS5', 'Nintentdo Switch', 'Xbox'];
        $text = 'zack';
        return view('test.demo', compact('name', 'age', 'games', 'text'));
    }

}