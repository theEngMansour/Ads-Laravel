<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class CategoryComposer
{
   protected $categories;
    
   public function __construct()
   {
     $this->categories =  Category::all();
   }

    public function compose(View $view)
    {        
        return $view->with('categories', $this->categories);
    }
}