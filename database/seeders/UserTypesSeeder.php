<?php

namespace Database\Seeders;

use App\Models\UserTypes;
use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        array_map(function ($name) {
            UserTypes::firstOrCreate([
                'name' => $name
            ]);
         }, config('Seeders.user_types'));
    }
}
