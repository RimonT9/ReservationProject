<?php

namespace App\Repositories;

interface BookingRepositoryInterface
{
    public function create($data);
    public function delete($id);
}