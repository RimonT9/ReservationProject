<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ResourceTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_resource(): void
    {
        $response = $this->postJson('/api/resources', [
            'name' => 'Test Resource',
            'type' => 'Type A',
            'description' => 'A detailed description'
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('resources', [
            'name' => 'Test Resource'
        ]);
    }

    public function test_can_get_all_resources()
    {
        Resource::factory()->count(3)->create();

        $response = $this->getJson('/api/resources');

        $response->assertStatus(200);
    }

    public function test_can_get_bookings_for_resource()
    {
        $user = User::factory()->create();
        $resource = Resource::factory()->create();
        $booking = Booking::factory()->create([
            'resource_id' => $resource->id,
            'user_id' => $user->id
        ]);

        $response = $this->getJson('/api/resources/' . $resource->id . '/bookings');

        $response->assertStatus(200);
    }
}
