<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class UsersPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'add',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete',
                'guard_name' => 'web',
            ],
            [
                'name' => 'update',
                'guard_name' => 'web',
            ],
            [
                'name' => 'show',
                'guard_name' => 'web',
            ]
        ];

        foreach($permissions as $val){

            Permission::create($val);
        }
    }
}
