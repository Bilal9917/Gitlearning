<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'employes';
    public $timestamps = false;
// public function getNameAttribute($value)
// {
//     return ('mr.'.$value." saifi");
// }
// public function getCityAttribute($value)
// {
//     return UCFirst($value." India");
// }
public function setNameAttribute($value)
{
    return $this->attributes['name'] = 'Mr .'.$value;
}
public function setCityAttribute($value)
{
    return $this->attributes['city'] =$value.', India';
}
}
