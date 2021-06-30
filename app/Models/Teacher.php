<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'city', 'email'];
    public $timestamps = false;

    protected $primaryKey = 'id';
 
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
