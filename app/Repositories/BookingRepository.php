<?php

namespace App\Repositories;

use App\Models\Booking;

class BookingRepository implements BookingRepositoryInterface
{
    public function create($data)
    {
        Booking::create($data);
    }

    public function delete($id)
    {
        $booking = Booking::find($id);
         
        $booking->delete();
    }
}