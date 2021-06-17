<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description' , 'end_date', 'subject_id'];
    protected $table = 'homeworks';
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

}
