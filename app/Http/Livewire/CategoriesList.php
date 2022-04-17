<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Category, Subcategory};

class CategoriesList extends Component
{
    public ?int $categorySelected = null;

    public function getCategoriesProperty()
    {
        return Category::all();
    }

    public function getSubcategoriesProperty()
    {
        return Subcategory::query()
            ->where('category_id', $this->categorySelected)
            ->get();
    }

    public function render()
    {
        return view('livewire.categories-list');
    }
}
