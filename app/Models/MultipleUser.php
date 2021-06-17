<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleUser extends Model
{
    use HasFactory;

    protected $table = 'users';
    public $connection = 'mysql2';
}
