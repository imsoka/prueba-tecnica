<?php

namespace App\Services;

use Exception;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class PublicacionesService
{
    const TABLE = "publicaciones";

    public function __construct()
    {
        
    }

    public function getAllPublicacionesPaginated(int $perPage): ?LengthAwarePaginator
    {
        if($perPage <= 0) throw new Exception("Cannot paginate with less or equal than 0 elements");

        return DB::table(self::TABLE)->select()->paginate($perPage);
    }
}
