<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'major_id',
    ];
    public function major(){
        return $this->belongsTo(Major::class);
    }
}
