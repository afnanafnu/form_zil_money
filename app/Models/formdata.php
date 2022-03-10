<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formdata extends Model
{
    protected $table = "data";
    public $timestamp =false;

     protected $fillable = ['name','age','gender','work_yes_no','language'];

    // public function setCategoryAttribute($value)
    // {
    //     $this->attributes['language'] = json_encode($value);
    // }

    // public function getCategoryAttribute($value)
    // {
    //     return $this->attributes['language'] = json_decode($value);
    // }
}
