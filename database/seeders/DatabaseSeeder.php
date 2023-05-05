<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            InsertFrontCoverLayout::class,
            MetricsSummarySeeder::class,
            UserSeeder::class,
            UsersRoleSeeder::class,
            UsersPermissionSeeder::class,
            // InsertBookDefaultSeeder::class,
            InsertCoverageLayouts::class,
        ]);
    }
}
