<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $primarykey = 'id';
    protected $fillable = ['libelle', 'sylabus', 'module_id'];

    public function Module()
    {
        return $this->belongsTo(Module::class);
    }
    use HasFactory, SoftDeletes;
}
