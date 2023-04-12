<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'names',
        'last_names',
        'email',
        'num_doc',
        'num_phone',
        'address',
        'company',
    ];
}
