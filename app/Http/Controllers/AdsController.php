<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdsRequest;
use App\Models\Favorite;
use Illuminate\Support\Facades\Validator;

use App\Repositories\ {
    Ads\AdsInterface,
    Favorites\FavoriteInterface
};

class AdsController extends Controller
{
    protected $ads;

    protected $favorite;

    public function __construct(AdsInterface $ads,FavoriteInterface $favorite)
    {
     //   $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]); OR:
        $this->middleware('auth')->only(['create', 'store', 'edit', 'delete']);

        $this->ads=$ads;

        $this->favorite=$favorite;  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads=$this->ads->all();

        return view('index',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdsRequest $request)
    {  
        $ads = $this->ads->store($request);

        return back()->with('success','تم إضافة الإعلان');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad=$this->ads->getDetails($id);

        if (\Auth::check())        
        $favorited = $this->favorite->show($id);

        return view('ads.show',compact('ad'),compact('favorited'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = $this->ads->getById($id);

        if (\Gate::allows('edit-ad', $ad)) {
            return view('ads.edit',compact('ad'));
        }

        abort(403);
   

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
        $ads = $this->ads->update($request,$id);

        return back()->with('success','تم تعديل الإعلان');
    }

    public function getUserAds()
    {
        $userAds = $this->ads->getByUser();

        return view('ads.userAds',compact('userAds'));
    }

    public function getByCategory ($catId)
    {
        $ads = $this->ads->getByCategory($catId);

        return view('ads.adsByCategory',compact('ads'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ads->delete($id); 

        return back()->with('success','تم حذف الإعلان');
    }

    public function search(Request $request)
    {
        $ads=$this->ads->search($request);

        return view('ads.showResults',compact('ads')); 
    }

    public function getUserFavorites()
    {
        $userFav=$this->ads->getCommonAds();

        return view('user.userFavorites',compact('userFav')); 
    }
}
