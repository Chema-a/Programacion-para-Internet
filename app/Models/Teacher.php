<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name_teacher','last_name_teacher', 'city', 'email'];
    public $timestamps = false;

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
