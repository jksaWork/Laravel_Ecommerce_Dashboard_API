<?php

namespace App\Repositories\Jska;
use App\Repositories\BaseRepo;
use App\Models\Jska\Jksa;

class JksaRepo extends BaseRepo
{
    public function getModel()
    {
        return Jksa::class;
    }

}
