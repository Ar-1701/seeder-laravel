<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $data['a'] = Admin::get();
        return view('welcome', $data);
    }
}
