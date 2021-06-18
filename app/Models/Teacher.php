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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'name_teacher';
}
}
