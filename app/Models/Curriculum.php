<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $table = 'curriculums';
    protected $primaryKey = 'id';
    protected $fillable = [
        'description_of_maintenance',
        'maintenance_date',
    ];
}
