<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Concesion extends Model
{
    use HasFactory;

    protected $table = 'concesiones';

    protected $fillable = [
        'name',
        'direccion',
        'provincia_id',
    ];

    public function provincia() : BelongsTo
    {
        return $this->belongsTo(Provincia::class);
    }
}
