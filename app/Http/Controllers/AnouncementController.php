<?php

namespace App\Http\Controllers;

use App\Anouncement;
use Illuminate\Http\Request;

class AnouncementController extends Controller
{
    public function list(Request $req) 
    {
        $news=Anouncement::orderBy('id','desc')->get();
        return view('Admin.News.list',compact('news'));
    }
    public function addForm() {
        return view('Admin.News.add');
    }
    public function add(Request $req ) {
        $req->validate(['title'=>'required']);
        $news=new Anouncement();
        $news->title=$req->title;
        $result=$news->save();
        
            return redirect('admin/anouncement')->with(['msg-success'=>'Anouncement added and active now']);
        
    }
    public function delete(Request $req) 
    {
        $news=Anouncement::find($req->deleteId);
        $news->delete();
        
        return redirect('admin/anouncement')->with(['msg-success'=>'Anouncement deleted successfullyy']);
    }
        
}
