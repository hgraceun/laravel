<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //restrict ang id para dili ma input
    protected $guarded = [
        'id',
    ];
}
