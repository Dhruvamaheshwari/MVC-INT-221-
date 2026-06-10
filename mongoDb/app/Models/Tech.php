<?php

namespace App\Models;


use MongoDB\Laravel\Eloquent\Model;   // this is Mandatory Import

class Tech extends Model
{
    //  add connection and collection
    protected $connection = 'mongodb';

    protected $collection = 'TechnicalTeam';

    protected $fillable = [
        'name',
        'email',
    ];
}
