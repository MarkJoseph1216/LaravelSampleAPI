<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailsModel extends Model {

    protected $table = 'details';
    protected $fillable = [
        'firstname',
        'lastname',
        'birthday',
        'emailadd',
        'password',
        'phoneno',
        'city',
        'cardno',
        'terms',];
}
