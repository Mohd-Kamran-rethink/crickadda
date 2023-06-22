<?php

namespace App\Http\Controllers;

use App\Anouncement;
use App\Image;
use App\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

class MainController extends Controller
{
    public function landingPage()
    {
        // Get the user's IP address
        $userIpAddress = request()->ip();

        // Make a request to the IP geolocation service
        $client = new Client();
        $response = $client->get("http://ip-api.com/json/{$userIpAddress}");
        // Parse the JSON response
        $data = json_decode($response->getBody(), true);
        // Retrieve the country information
        $country = $data['countryCode'] ?? "IN";
        $responseData = ['country' => $country];
        $logo = Image::where('category', 'logo')
            ->orderBy('created_at', 'desc')
            ->first();
        $images = Image::get();

        $socialLinks = SocialLink::where('country', '=', 'india')->get();
        $news = Anouncement::orderBy('created_at', 'desc')->first();

        return view('MainTheme.index', compact('responseData', 'logo', 'images', 'socialLinks', 'news'));
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
            'files' => 'required',
            'category' => 'required|not_in:0',
        ]);
        if ($req->hasFile('files')) {
            foreach ($req->file('files') as $file) {
                // Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                // Get just the filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just the extension
                $extension = $file->getClientOriginalExtension();
                // Filename to store
                $Image = $filename . '_' . time() . '.' . $extension;
                // Upload Image
                $path = $file->storeAs('public/Banners/', $Image);
                // Save the image record
                $image = new Image();
                $image->filename = $Image;
                $image->name = $filename;
                $image->category = $req->category;
                $image->heading = $req->heading;
                $image->screen_type = $req->screen_type;
                $image->save();
            }
        }

        return redirect('/admin/images')->with(['msg-success' => 'Images have been uploaded.']);
    }
    public function deletImgae(Request $req)
    {
        $image = Image::find($req->deleteId);
        Storage::delete('public/Banners/' . $image->filename);

        $result = $image->delete();
        if ($result) {
            return redirect('/admin/images')->with(['msg-success' => 'Image  has been deleted.']);
        } else {
            return redirect('/admin/images')->with(['msg-error' => 'Something went wrong could not update image.']);
        }
    }
    public function socialLinksList()
    {
        $links = SocialLink::get();
        return view('Admin.SocialLinks.list', compact('links'));
    }
    public function socialLinksForm()
    {
        return view('Admin.SocialLinks.add');
    }
    public function socialLinksAdd(Request $req)
    {
        $req->validate([
            'country' => 'required|not_in:0',
            'platform' => 'required|not_in:0',
            'link' => 'required',
        ]);
        $socialLink = new SocialLink();
        $socialLink->country = $req->country;
        $socialLink->platform = $req->platform;
        $socialLink->value = $req->link;
        $result = $socialLink->save();
        if ($result) {
            return redirect('/admin/social-links')->with(['msg-success' => 'Link  has been updated.']);
        } else {
            return redirect('/admin/social-links')->with(['msg-error' => 'Something went wrong could not update link .']);
        }
    }
    public function socialLinkDelete(Request $req)
    {
        $socialLink = SocialLink::find($req->deleteId);
        $result = $socialLink->delete();
        if ($result) {
            return redirect('/admin/social-links')->with(['msg-success' => 'Link  has been deleted.']);
        } else {
            return redirect('/admin/social-links')->with(['msg-error' => 'Something went wrong could not delete link .']);
        }
    }



    public function test()
    {
        return view('MainTheme.DesktopTheme.index');
    }

}
