<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function landingPage()
    {
        $responseData = ['country' => 'IN'];
        $logo = Image::where('category', 'logo')
                ->orderBy('created_at', 'desc')
                ->first();
        $images=Image::get();        
        return view('index', compact('responseData','logo','images'));
    }
    public function listImages()
    {
        $images = Image::get();
        return view('Admin.Images.list', compact('images'));
    }
    public function addForm()
    {
        return view('Admin.Images.add');
    }
    public function add(Request $req)
    {
        $req->validate([
            'file' => 'required',
            'category' => 'required|not_in:0',
        ]);
        $image=new Image();
        if ($req->file('file')) {
            // Get filename with the extension
            $filenameWithExt = $req->file('file')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('file')->getClientOriginalExtension();
            // Filename to store
            $Image = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $req->file('file')->storeAs('public/Banners/', $Image);
            $image->filename = $Image;
        }
        $image->name=$req->category;
        $image->category=$req->category;
        $result=$image->save();
        if ($result) {
            return redirect('/admin/images')->with(['msg-success' => 'Expense  has been updated.']);
        } else {
            return redirect('/admin/images')->with(['msg-error' => 'Something went wrong could not update expense .']);
        }
    }
    public function deletImgae(Request $req){
            $image=Image::find($req->deleteId);
            Storage::delete('public/Banners/' . $image->filename);

           $result= $image->delete();
            if ($result) {
                return redirect('/admin/images')->with(['msg-success' => 'Expense  has been updated.']);
            } else {
                return redirect('/admin/images')->with(['msg-error' => 'Something went wrong could not update expense .']);
            }

    }
}
