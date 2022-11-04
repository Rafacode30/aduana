<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'tamaño',
        'peso',
        'sensor',
        'destino',
        'origen'
    ];

    public function getCreatedAtAttribute($value)
    {
        if (!empty($value)) {
            
            return Carbon::parse($value)->format('d-m-Y - h:i:s A');
        }
    }

    public function getUpdatedAtAttribute($value)
    {
        if (!empty($value)) {

            return Carbon::parse($value)->format('d-m-Y - h:i:s A');
        }
    }
}
