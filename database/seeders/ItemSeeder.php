<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
                'name' => 'Item 1',
                'price' => 10.0,
        ]);

        Item::create([
                'name' => 'Item 2',
                'price' => 10.0,
        ]);
    }
}
