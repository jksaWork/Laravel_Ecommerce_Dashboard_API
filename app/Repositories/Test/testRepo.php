<?php

namespace App\Repositories\Test;
use App\Repositories\BaseRepo;
use App\Models\Test\Test;

class TestRepo extends BaseRepo
{
    public function getModel()
    {
        return Test::class;
    }

}
