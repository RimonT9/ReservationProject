<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\Resource;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookingTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_booking()
    {
        $user = User::factory()->create();
        $resource = Resource::factory()->create();

        $response = $this->postJson('/api/bookings', [
            'resource_id' => $resource->id,
            'user_id' => $user->id,
            'start_time' => Carbon::now()->addDays(rand(1, 30))->format('Y-m-d H:i:s'),
            'end_time' => Carbon::now()->addDays(rand(1, 30))->addHours(rand(1, 5))->format('Y-m-d H:i:s')
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('bookings', [
            'resource_id' => $resource->id,
            'user_id' => $user->id
        ]);
    }

    public function test_can_cancel_booking()
    {
        $user = User::factory()->create();
        $resource = Resource::factory()->create();
        $booking = Booking::factory()->create([
            'resource_id' => $resource->id,
            'user_id' => $user->id
        ]);

        $response = $this->deleteJson('/api/bookings/' . $booking->id);

        $response->assertStatus(200);
    }
}
