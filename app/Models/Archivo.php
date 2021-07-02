<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'path', 'mime'];

    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }

    public function homework(){
        return $this->belongsTo(Homework::class);
    }
}
