<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //
    use Traits\Encryptable;

    protected $encryptable = [
        'email',
    ];
    public $timestamps = false;
    protected $fillable = ['email'];
}
