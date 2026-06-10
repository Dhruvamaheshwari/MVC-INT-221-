<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// ye import krna pde ga
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IsModel extends Model
{
    use HasFactory; // use factory here
    protected $table = 'myseed'; // myseed is table name
}
