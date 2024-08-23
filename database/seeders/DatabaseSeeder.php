<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\libraie;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // This is seeder calling
        /*$this->call([
            StudentSeeder::class
        ]);*/

        // This is end of seeder calling

        #This is student faker calling
          // student::factory()->count(5)->create();
        #End of Student faker calling

        #This is library faker calling
        libraie::factory()->count(5)->create();
    }
}
