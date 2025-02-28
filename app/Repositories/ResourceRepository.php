<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Models\Resource;

class ResourceRepository implements ResourceRepositoryInterface
{
    public function get()
    {
        return Resource::all();
    }

    public function create($data)
    {
        Resource::create($data);
    }

    public function show($id)
    {
        return Booking::where('resource_id', $id)->get();
    }
}