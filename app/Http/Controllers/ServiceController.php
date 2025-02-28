<?php

namespace App\Http\Controllers;

use App\Services\BookingService;
use App\Services\ResourceService;

class ServiceController extends Controller
{
    protected $bookingService;
    protected $resourceService;

    public function __construct(BookingService $bookingService, ResourceService $resourceService)
    {
        $this->bookingService = $bookingService;
        $this->resourceService = $resourceService;
    }
}
