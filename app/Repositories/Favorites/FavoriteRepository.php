<?php

namespace App\Repositories\Favorites;

use App\Models\Favorite;
use App\User;
class FavoriteRepository implements FavoriteInterface
{
    protected $favorite;

    public function __construct(Favorite $favorite)
    {
        $this->favorite=$favorite;
    }

    public function store($request)
    {
         $request->user()->favAds()->attach($request->id);
    }

    public function show($id)
    {
        $favorited=\Auth::user()->favAds()->whereAd_id($id)->first();
        return $favorited? true:false;
    }

    public function delete($id)
    {
        \Auth::user()->favAds()->detach($id);
    }
}

?>