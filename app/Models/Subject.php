<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name','teacher_id', 'available_places', 'teacher_id'];
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function homework()
    {
        return $this->hasMany(Homework::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    /**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'name';
}

}

