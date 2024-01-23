<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   // ProfileController.php

public function index()
{
    return view('profile');
}
}
