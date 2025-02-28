<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\ServiceController;
use App\Http\Requests\Booking\StoreRequest;
use OpenApi\Annotations as OA;

/**
 * @OA\PathItem(
 *     path="/ReservationProject/public/api/bookings",
 *     @OA\Post(
 *         tags={"Bookings"},
 *         @OA\RequestBody(
 *             required=true,
 *             @OA\JsonContent(ref="#/components/schemas/Booking")
 *         ),
 *         @OA\Response(response="200", description="Booking created"),        
 *     )
 * )
 */
class StoreController extends ServiceController
{
    /**
     * @OA\Schema(
     *     schema="Booking",
     *     type="object",
     *     @OA\Property(property="resource_id", type="integer"),
     *     @OA\Property(property="user_id", type="integer"),
     *     @OA\Property(property="start_time", type="string", format="date"),
     *     @OA\Property(property="end_time", type="string", format="date")
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
         
        $this->bookingService->createBooking($data);

        return response([]);
    }
}


