<?php

namespace App\Observers;

use App\Mail\NotificationMail;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;

class BookingObserver
{
    public function created(Booking $booking): void
    {
        $this->sendNotification('Create a booking', 'Booking created');
    }

    public function deleted(Booking $booking): void
    {
        $this->sendNotification('Cancel booking', 'Booking cancelled');
    }

    protected function sendNotification($subject, $notice)
    {
        Mail::to('laravel999@yandex.ru')->send(new NotificationMail($subject, $notice));
    }
}
