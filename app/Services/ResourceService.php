<?php

namespace App\Services;

class ResourceService extends RepositoryService
{
    public function getResources()
    {
        $resources = $this->resourceRepository->get();
        
        return $resources;        
    }

    public function createResource($data)
    {
        $this->resourceRepository->create($data);
    }

    public function showBookingsForResource($id)
    {
        $BookingsForResource = $this->resourceRepository->show($id);

        return $BookingsForResource;
    }
}