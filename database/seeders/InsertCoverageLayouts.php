<?php

namespace Database\Seeders;

use App\Models\CoverageLayout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertCoverageLayouts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Full Page'],
            ['name' => 'Grid'],
            ['name' => 'List'],
        ];
        
        CoverageLayout::insert($data);
    }
}
