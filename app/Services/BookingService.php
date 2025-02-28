<?php

namespace App\Services;

class BookingService extends RepositoryService
{
    public function createBooking($data)
    {
        $this->bookingRepository->create($data);
    }

    public function deleteBooking($id)
    {
        $this->bookingRepository->delete($id);
    }
}