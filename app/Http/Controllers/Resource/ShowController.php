<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\ServiceController;
use App\Http\Resources\Resource\BookingResource;
use OpenApi\Annotations as OA;

/**
 * @OA\PathItem(
 *     path="/ReservationProject/public/api/resources/{id}/bookings",
 *     @OA\Parameter(name="id", in="path", required=true, 
 *     @OA\Schema(type="integer")),
 *     @OA\Get(
 *         tags={"Resources"},
 *         @OA\Response(response="200", description="List bookings for resources"),
 *         @OA\Response(response="404", description="Resource not found")
 *     )
 * )
 */
class ShowController extends ServiceController
{
    public function __invoke($id)
    {
        $BookingsForResource = $this->resourceService->showBookingsForResource($id);

        return BookingResource::collection($BookingsForResource);
    }
}

