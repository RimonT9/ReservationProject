<?php

namespace App\Repositories;

interface ResourceRepositoryInterface
{
    public function get();
    public function create($data);
    public function show($id);
}