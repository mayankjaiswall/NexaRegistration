<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class NexaModel extends Model
{
    use HasFactory;

    protected $table = 'cars'; //table name not the database name keep this in your mind
}
