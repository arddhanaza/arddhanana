<?php

namespace App\Http\Controllers;
use App\Portfolio;
use DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $portfolios = DB::table('portfolio')->get();

        return view('main', compact('portfolios'));
    }


    public function addData()
    {
        return view('adddata');
    }

    public function uploadData(Request $req)
    {

        $this->validate($req, [
            'image' => 'file|image|mimes:jpeg,png,jpg',
        ]);

        $image = $req->file('image');

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'img';


        // upload file
        $image->move($tujuan_upload, $image->getClientOriginalName());

        $title = $req->title;
        $type = $req->type;
        $description = $req->description;
        $link = $req->link;


        $isTrue = DB::table('portfolio')->insert([
            'title' => $title,
            'type' => $type,
            'image' => $image->getClientOriginalName(),
            'description' => $description,
            'link' => $link,
        ]);

        if ($isTrue) {
            return redirect('/');
        }
        return redirect('add');
    }
}
