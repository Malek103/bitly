<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use App\Http\Requests\StoreShortLinkRequest;
use App\Http\Requests\UpdateShortLinkRequest;
use Illuminate\Support\Str;
class ShortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shortLinks=ShortLink::paginate(5);
        // return $shortLink;
        return view('home',compact('shortLinks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShortLinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShortLinkRequest $request)
    {
        //
        // dd($request->all());
        $this->validate($request,[
            'link'=>'required|url',
        ]);
        ShortLink::create([
            'link'=>$request->link,
            'code'=>uniqid(),
        ]);
        notify()->success('Url Create Successfully!');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function show(ShortLink $shortLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ShortLink $shortLink,$id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShortLinkRequest  $request
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShortLinkRequest $request, ShortLink $shortLink,$id)
    {
        // $this->validate($request,[
        //     'link'=>'required|url',
        // ]);
        // $shortLink=ShortLink::find($id);
        // $shortLink->link=$request->link;
        // $shortLink->code=uniqid();
        // $shortLink->save();
        // notify()->success('Url Update Successfully!');
        // return redirect()->route('home');
        $request->merge([
            'code' => uniqid(),
        ]);
        $shortLink = ShortLink::find($id);
        $shortLink->update($request->all());
        notify()->success('Url Update Successfully!');
         return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ShortLink::destroy($id);
        notify()->success('Url deleted Successfully!');
        return redirect()->route('home');

    }
    public function redirect($id)
    {
        $url = ShortLink::where('code', $id)->first();
        return redirect($url->link);
    }
}
