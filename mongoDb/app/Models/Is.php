<?php

namespace App\Models;


use MongoDB\Laravel\Eloquent\Model;   // this is Mandatory Import

class Is extends Model
{
    //  add connection and collection
    protected $connection = 'mongodb';

    protected $collection = 'IsTable';

    protected $fillable = [
        'name',
        'email',
    ];
}
