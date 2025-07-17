<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mhs';
    protected $fillable = ['nim','nama','kelas','foto'];
}
