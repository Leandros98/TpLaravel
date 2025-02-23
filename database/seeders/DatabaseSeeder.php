<?php

namespace Database\Seeders;
use App\Models\Option;
use App\Models\Property;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $options=Option::factory(10)->create();
        Property::factory(60)->hasAttached($options->random(4))->create();
    }
}
