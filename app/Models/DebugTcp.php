<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DebugTcp extends Model
{
    protected $table = 'debug_tcps';
    protected $fillable = [
        'ip',
        'content'
    ];
}
