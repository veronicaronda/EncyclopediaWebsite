<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request, Entry $entry){
        $search = $request->input('search');
        $single = Entry::where('title', 'LIKE', "%".$search."%")->first(); 
        
        if ($single){
            return redirect()->route('entry.show', $single->id);
        } else {
            
            return redirect()->back()->with('message', 'No entry found!');
        }
        return view('entry', compact('single'));       
        
    }
}
    