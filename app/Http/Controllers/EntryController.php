<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\User;
use App\Models\Entry;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\EntryRequest;
use Illuminate\Support\Facades\Auth;
use GrahamCampbell\Markdown\Facades\Markdown;

class EntryController extends Controller
{
    
    
    public function addEntry(Entry $entry) {
        return view('add',compact('entry'));
    }
    
    public function store(EntryRequest $request){
        // dd($request->all())  ;
        $entries = Auth::user()->entries()->create([
            
            'title'=> $request->input('title'),
            'body'=>$request-> input('body'),
            'img'=> $request->has('img') ? $request->file('img')->store('public/') : 'img/default.jpg',
            'category_id'=>$request->input('category_id')
            
        ]);
        $entries->tags()->attach($request->input('tag_id'));
        return redirect(route('home'))->with('message', 'Article Published');
        
    }
    public function show(Entry $entry){
        
        return view('entry', compact('entry'));
    }
    
    public function update(Entry $entry, EntryRequest $request){
        $entry->update([
            'title'=> $request->input('title'),
            'body'=>$request-> input('body'),
            'img'=> $request->has('img') ? $request->file('img')->store('public') : $entry->img,
            'category_id'=>$request->input('category_id')
        ]);
        $entry->tags()->sync($request->input('tag_id'));
        
        
        return redirect()->route('home')->with('message', 'Article Edited');
    }
    
    public function edit( Entry $entry){
        return view('edit', compact('entry'));
    }
    
    public function delete(Entry $entry){
        $entry->tags()->detach();
        $entry->delete();
        return redirect(route('home'))->with('message', 'Article Deleted');
    }
    
    public function entryUser(User $user){
        return view('entryUser',compact('user'));
    }
    
    public function entryCategory(Category $category){
        return view('entryCategory',compact('category'));
    }
    public function entrytag(Tag $tag){
        return view('entryTag',compact('tag'));
    }
}
