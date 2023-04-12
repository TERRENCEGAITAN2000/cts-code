<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requeriment extends Model
{
    use HasFactory;
    protected $table = 'requeriments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'description',
        'maintenance_date',
        'time_maintenance',
    ];
}
