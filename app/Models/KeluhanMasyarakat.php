<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluhanMasyarakat extends Model
{
    use HasFactory;

    protected $table = 'keluhan_masyarakat';

    protected $fillable = ['nama', 'email', 'keluhan', 'action'];

    public $timestamps = true;
}
