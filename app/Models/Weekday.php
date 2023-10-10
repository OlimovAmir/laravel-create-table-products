<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekday extends Model
{
    use HasFactory;
    protected $table = 'weekdays';

       protected $fillable = [
           'пн',
           'вт',
           'ср',
           'чт',
           'пт',
           'сб',
           'вс',
       ];

       protected $casts = [
           'пн' => 'boolean',
           'вт' => 'boolean',
           'ср' => 'boolean',
           'чт' => 'boolean',
           'пт' => 'boolean',
           'сб' => 'boolean',
           'вс' => 'boolean',
       ];
}
