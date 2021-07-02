<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['birthday','condition','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }
    
    public $timestamps = false;
}
