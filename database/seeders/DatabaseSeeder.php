<?php

namespace Database\Seeders;

use App\Models\Counter;
use App\Models\Invioce;
use App\Models\InvioceItem;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Counter::factory(1)->create();
       // Product::factory(1)->create();
      // Invioce::factory(5)->create();
      InvioceItem::factory(5)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
