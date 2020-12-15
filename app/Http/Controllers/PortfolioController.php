<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('main', compact('portfolios'));
    }

    public function showAllData(){
        $portfolios = Portfolio::all();
        return view('data', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adddata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $newPorto = new Portfolio();

        $this->validate($req, [
            'image' => 'file|image|mimes:jpeg,png,jpg',
        ]);
        $image = $req->file('image');

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'img';


        // upload file
        $image->move($tujuan_upload, $image->getClientOriginalName());

        $newPorto->title = $req->title;
        $newPorto->type = $req->type;
        $newPorto->description = $req->description;
        $newPorto->link = $req->link;
        $newPorto->image = $image->getClientOriginalName();


        $isTrue = $newPorto->save();

        if ($isTrue) {
            return redirect('/');
        }
        return redirect('add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('editdata',['porto'=>$portfolio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->title = $request->title;
        $portfolio->type = $request->type;
        $portfolio->description = $request->description;
        if ($request->hasFile('image')){
            $this->validate($request, [
                'image' => 'file|image|mimes:jpeg,png,jpg',
            ]);
            $image = $request->file('image');

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img';

            // upload file
            $image->move($tujuan_upload, $image->getClientOriginalName());

            $portfolio->image = $image->getClientOriginalName();
            $old_image = public_path("img\\".$request->old_image);

            unlink($old_image);
        }
        $portfolio->save();
        return redirect(route('allData'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect(route('allData'));
    }
}
