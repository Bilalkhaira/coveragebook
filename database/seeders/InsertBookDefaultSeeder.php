<?php

namespace Database\Seeders;

use App\Models\BookSections;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertBookDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Front Matter'],
            ['name' => 'Coverage'],
        ];
        
        BookSections::insert($data);
    }
}
