<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'SubName',
        'SubCode',
        'crtd',
    ];
    public function students(){
        return $this->hasMany(Students::class,'sub_id');
    }
}
