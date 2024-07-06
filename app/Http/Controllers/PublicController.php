<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function home() {
        $entries = Entry::all()->sortDesc();
        return view('welcome', compact('entries'));
    }

}
