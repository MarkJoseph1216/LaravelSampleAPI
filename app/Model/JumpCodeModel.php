<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JumpCodeModel extends Model {
    protected $fillable = [
        'httpCode',
        'response' => 'array'];
}
