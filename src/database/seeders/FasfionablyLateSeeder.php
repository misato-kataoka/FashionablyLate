<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasfiionablyLateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->count(35)->create();

        User::factory()->create([
            'first_name' => '',
            'last_name',
            'gender',
            'email',
            'tel',
            'address',
            'building',
            'categories'
            'detail',
        ])
    }
}
