<?php 

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="API Documentation", 
 *     version="1.0.0",
 *     description="Documentation for my API",
 *     @OA\Contact(
 *         name="Roman",
 *         email="Timurshinroman123@gmail.com"
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="Resource",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="description", type="string"),
 * )
 */

/**
 * @OA\Schema(
 *     schema="Booking",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="resource_id", type="integer"),
 *     @OA\Property(property="user_id", type="integer"),
 *     @OA\Property(property="start_time", type="string", format="date"),
 *     @OA\Property(property="end_time", type="string", format="date"),
 * )
 */