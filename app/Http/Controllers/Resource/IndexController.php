<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\ServiceController;
use App\Http\Resources\Resource\ResourceResource;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="API Documentation", 
 *     version="1.0.0",
 *     description="Documentation for my API"
 * )
 * @OA\Tag(
 *     name="Bookings",
 *     description="API Endpoints of bookings"
 * )
 * @OA\Tag(
 *     name="Resources",
 *     description="API Endpoints of resources"
 * )
 */
class IndexController extends ServiceController
{
    /**
     * @OA\PathItem(
     *     path="/ReservationProject/public/api/resources",
     *     @OA\Get(
     *         tags={"Resources"},
     *         @OA\Response(response="200", description="List all resources")
     *     )
     * )
     */
    public function __invoke()
    {
        $resources = $this->resourceService->getResources();

        return ResourceResource::collection($resources);
    }
}

