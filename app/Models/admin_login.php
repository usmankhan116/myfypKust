<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_login extends Model
{
    protected $table="admin_login";
    protected $primaryKey = 'email';
    public $incrementing = false;
    use HasFactory;
}
