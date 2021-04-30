<?php

namespace App\Http\Controllers;

use App\Repositories\Favorites\FavoriteRepository;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    protected $favorite;

    public function __construct(FavoriteRepository $favorite)
    {
        $this->middleware('auth');

        $this->favorite=$favorite;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->favorite->store($request);
        return back()->with('success','تم تفضيل إعلان');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->favorite->delete($id);
    }
}
