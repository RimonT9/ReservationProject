<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\ServiceController;
use App\Http\Requests\Resource\StoreRequest;
use OpenApi\Annotations as OA;

/**
 * @OA\PathItem(
 *     path="/ReservationProject/public/api/resources",
 *     @OA\Post(
 *         tags={"Resources"},
 *         @OA\RequestBody(
 *             required=true,
 *             @OA\JsonContent(ref="#/components/schemas/Resource")
 *         ),
 *         @OA\Response(response="200", description="Resource created")
 *     )
 * )
 */
class StoreController extends ServiceController
{
    /**
     * @OA\Schema(
     *     schema="Resource",
     *     type="object",
     *     @OA\Property(property="name", type="string"),
     *     @OA\Property(property="type", type="string"),
     *     @OA\Property(property="description", type="string")
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        
        $this->resourceService->createResource($data);

        return response([]);
    }

}

