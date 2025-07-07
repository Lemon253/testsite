<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;


class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            'name' => 'ringo',
            'price' => 300,
            'image_url' => 'aaa',

        ];
        Item::create($item);

        $item = [
            'name' => 'mikan',
            'price' => 300,
            'image_url' => 'aaa',

        ];
        Item::create($item);
        $item = [
            'name' => 'nashi',
            'price' => 300,
            'image_url' => 'aaa',

        ];
        Item::create($item);
    }
}
