<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{   public $timestamps=false;
    protected $table="login";
    protected $primaryKey = 'email';public $incrementing = false;
    use HasFactory;
}
