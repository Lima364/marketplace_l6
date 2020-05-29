<?php


namespace App\Http\Views;

use App\category;

class CategoryViewComposer
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function compose($view)
    { //dd('OKKK');
        return $view->with('categories', $this->category->all(['name', 'slug']));
    }
}
