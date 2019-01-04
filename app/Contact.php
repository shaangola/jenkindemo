<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property int $email
 * @property int $insurancetype
 * @property string $created_date
 */
class Contact extends Model
{
    use Traits\Encryptable;

    protected $encryptable = [
        'email',
        'name',
        'phone',
    ];
    /**
     * @var array
     */
    protected $fillable = ['name', 'phone', 'email', 'insurancetype','message', 'created_date'];

}
