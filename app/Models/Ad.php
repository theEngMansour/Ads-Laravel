<?php

namespace App\Models;
use App\Helpers\helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Ad extends Model
{
    //
    protected $guarded=['id']; //عكس دالة فيلبل هذي تكتب الحقل الذي ماتشتيه ينضاف عندإنشاء معلومات

    //تسمية تكون بهذا الشكل كلمة set+اسم الحقل المعني+ Attribute
    // تعديل البيانات قبل إرسالها لقاعدة البيانات
    public function setSlugAttribute($value)
    {
        $slug=helper::slug($value); 

        $uniqueSlug=helper::uniqueSlug($slug,'ads');

        $this->attributes['slug'] = $uniqueSlug;
    }
    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->where('parent_id',null);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function Country()
    {
        return $this->belongsTo('App\Models\Country');
    }
    //Search ------------------------------------------
    public function scopeFilter($query, Request $request)
    {
        if ($request->country) {
            $query->whereCountry_id($request->country);
        }

        if ($request->category) {
            $query->whereCategory_id($request->category);
        }

        if ($request->keyword) {
            $query->where('title', 'LIKE', '%'.$request->keyword.'%');
        }

        return $query->with('images')->get();
    }

}
