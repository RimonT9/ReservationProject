<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Resource;
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
        // User::factory(10)->create();

        $user = User::factory()->create();
        $resource = Resource::factory()->create();
        Booking::factory([
            'resource_id' => $resource->id,
            'user_id' => $user->id
        ])->create();
    }
}
