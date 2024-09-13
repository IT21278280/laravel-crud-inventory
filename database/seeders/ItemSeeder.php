<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = new \App\Models\Item([
            'name' => 'Item #1',
            'detail' => 'Item #1 details'
        ]);
        $item->save();

        $item = new \App\Models\Item([
            'name' => 'Item #2',
            'detail' => 'Item #2 details'
        ]);
        $item->save();

        $item = new \App\Models\Item([
            'name' => 'Item #3',
            'detail' => 'Item #3 details'
        ]);
        $item->save();

        $item = new \App\Models\Item([
            'name' => 'Item #4',
            'detail' => 'Item #4 details'
        ]);
        $item->save();

        $item = new \App\Models\Item([
            'name' => 'Item #5',
            'detail' => 'Item #5 details'
        ]);
        $item->save();

    }
}
