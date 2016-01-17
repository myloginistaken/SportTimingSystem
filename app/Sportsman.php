<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sportsman extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sportsman_number', 'name', 'last_name',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'start_time', 'finish_time',
    ];
}
