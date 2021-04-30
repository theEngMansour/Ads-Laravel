<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Country;

class CountryComposer
{
    protected $countries;
    
    public function __construct()
    {
        $this->countries=Country::all();
    }
    
    public function compose(View $view)
    {        
        return $view->with('countries', $this->countries);
    }
}