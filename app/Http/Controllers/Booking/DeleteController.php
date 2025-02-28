<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\ServiceController;
use OpenApi\Annotations as OA;

/**
 * @OA\PathItem(
 *     path="/ReservationProject/public/api/bookings/{id}",
 *     @OA\Parameter(name="id", in="path", required=true, 
 *     @OA\Schema(type="integer")),
 *     @OA\Delete(
 *         tags={"Bookings"},
 *         @OA\Response(response="200", description="Resource deleted"),
 *         @OA\Response(response="404", description="Resource not found")
 *     )
 * )
 */
class DeleteController extends ServiceController
{
    public function __invoke($id)
    {
        $this->bookingService->deleteBooking($id);

        return response([]);
    }
}
