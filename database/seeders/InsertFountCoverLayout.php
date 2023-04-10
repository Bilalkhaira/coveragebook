<?php

namespace Database\Seeders;

use App\Models\Layout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertFountCoverLayout extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Stacked'],
            ['name' => 'Side-by-Side'],
            ['name' => 'Overlay'],
        ];
        Layout::insert($data);
    }
}
