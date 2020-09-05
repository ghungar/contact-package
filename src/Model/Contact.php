<?php

namespace Raman\Contact\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = [
        'message',
        'email',
        'name'
    ];
}
