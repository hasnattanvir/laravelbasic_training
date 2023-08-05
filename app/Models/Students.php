<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'image',
        'sub_id'
    ];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
