<?php

namespace Database\Factories;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class BookingFactory extends Factory
{
    use WithFaker;

    protected $model = Booking::class;
    
    public function definition(): array
    {
        return [
            'resource_id' => $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(1,10),
            'start_time' => Carbon::now()->addDays(rand(1, 30))->format('Y-m-d H:i:s'),
            'end_time' => Carbon::now()->addDays(rand(1, 30))->addHours(rand(1, 5))->format('Y-m-d H:i:s')
        ];
    }
}
