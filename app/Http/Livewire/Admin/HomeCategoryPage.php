<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\HomeCategory;
use Illuminate\Http\Request;

class HomeCategoryPage extends Component
{
    public $selected_categories = [];
    public $product_no;

    public function mount()
    {
        $category = HomeCategory::find(1);
        $this->selected_categories = explode(',', $category->categories_name);
        $this->product_no = $category->no_of_products;
    }

    public function updateHomeCategory(Request $request)
    {
        $category = HomeCategory::find(1);
        $category->categories_name = implode(',', $this->selected_categories);
        $category->no_of_products = $this->product_no;
        $category->save();
        $request->session()->flash('status', 'Home Categories has been updated successfully!');
    }

    public function render()
    {
        $categories = Category::all();
        $home_category = HomeCategory::find(1);
        $home_category_id = explode(',', $home_category->categories_name);
        $home_category_name = Category::whereIn('id', $home_category_id)->get();
        return view('livewire.admin.home-category-page', ['categories' => $categories, 'home_category_name' => $home_category_name])->layout('layouts.admin');
    }
}
