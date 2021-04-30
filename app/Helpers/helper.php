<?php

namespace App\Helpers;
use DB;

class helper
{
    public static function slug($str)
    {   
        // نتحقق بأنة نص لايحتوى ع رموز اخرى لاتشملها القاعدة في حالة وجود رمز لاتشملة القاعدة سيقوم بازالتة  
        $string = preg_replace("/[^a-z0-9_\s\-۰۱۲۳۴۵۶۷۸۹يءاأإآؤئبپتثجچحخدذرزژسشصضطظعغفقکكگگلمنوهی]/u", '', $str);
        // استبدال اي علامة شرطة او مسافة بيضاء با بسمافة 
        $string = preg_replace("/[\s\-_]+/", ' ', $string);
        // استبدال المسافة با شرطة
        $string = preg_replace("/[\s_]/", '-', $string);
        
        return $string;
    }

    public static function uniqueSlug($slug,$table)
    {  
        $slug=trim($slug);
        
        $items=DB::table($table)->select('slug')->whereRaw("slug like '$slug%'")->get();

        if(sizeof($items)){
            foreach($items as $item){
                $data[] = $item->slug;
            }

            $count = 0;
            $slug_str=$slug;            
            while( in_array(($slug_str), $data) ){
                $slug_str = $slug . '-' . ++$count ; 
            }       
            return $slug_str;
        }
        
        return $slug;
    }

}
