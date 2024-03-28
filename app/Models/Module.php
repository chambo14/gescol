<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Module extends Model
{
    protected $table = 'modules';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'slug'];
    use HasFactory;
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
