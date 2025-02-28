<?php

namespace App\Services;

use App\Repositories\BookingRepositoryInterface;
use App\Repositories\ResourceRepositoryInterface;

class RepositoryService
{
    protected $bookingRepository;
    protected $resourceRepository;

    public function __construct(
        BookingRepositoryInterface $bookingRepository, 
        ResourceRepositoryInterface $resourceRepository)
    {
        $this->bookingRepository = $bookingRepository;
        $this->resourceRepository = $resourceRepository;
    }
}