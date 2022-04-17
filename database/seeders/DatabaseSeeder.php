<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Category, Subcategory};

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->createCategories();

        $this->createSubcategories();
    }

    private function createCategories() {
        Category::insert([
            ['name' => 'Eastern'],
            ['name' => 'Western'],
        ]);
    }

    private function createSubcategories()
    {
        $categories = Category::all();

        $eastern = $categories[0]->id;
        
        Subcategory::insert([
            ['category_id' => $eastern, 'name' => 'Heat'],
            ['category_id' => $eastern, 'name' => 'Celtics'],
            ['category_id' => $eastern, 'name' => 'Bucks'],
            ['category_id' => $eastern, 'name' => '76ers'],
            ['category_id' => $eastern, 'name' => 'Raptors'],
            ['category_id' => $eastern, 'name' => 'Bulls'],
            ['category_id' => $eastern, 'name' => 'Nets'],
            ['category_id' => $eastern, 'name' => 'Hawks'],
            ['category_id' => $eastern, 'name' => 'Cavaliers'],
            ['category_id' => $eastern, 'name' => 'Hornets'],
            ['category_id' => $eastern, 'name' => 'Knicks'],
            ['category_id' => $eastern, 'name' => 'Wizards'],
            ['category_id' => $eastern, 'name' => 'Pacers'],
            ['category_id' => $eastern, 'name' => 'Pistons'],
            ['category_id' => $eastern, 'name' => 'Magic'],
        ]);

        $western = $categories[1]->id;
        
        Subcategory::insert([
            ['category_id' => $western, 'name' => 'Suns'],
            ['category_id' => $western, 'name' => 'Grizzlies'],
            ['category_id' => $western, 'name' => 'Warriors'],
            ['category_id' => $western, 'name' => 'Mavericks'],
            ['category_id' => $western, 'name' => 'Jazz'],
            ['category_id' => $western, 'name' => 'Nuggets'],
            ['category_id' => $western, 'name' => 'Timberwolves'],
            ['category_id' => $western, 'name' => 'Pelicans'],
            ['category_id' => $western, 'name' => 'Clippers'],
            ['category_id' => $western, 'name' => 'Spurs'],
            ['category_id' => $western, 'name' => 'Lakers'],
            ['category_id' => $western, 'name' => 'Kings'],
            ['category_id' => $western, 'name' => 'Blazers'],
            ['category_id' => $western, 'name' => 'Thunder'],
            ['category_id' => $western, 'name' => 'Rockets'],
        ]);
    }
}
