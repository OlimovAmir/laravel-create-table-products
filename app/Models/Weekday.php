<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekday extends Model
{
    use HasFactory;
    protected $table = 'weekdays';

    protected $fillable = [
        'id',
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

    public function getDayAttribute()
    {
        $days = [
            'пн' => 'Понедельник',
            'вт' => 'Вторник',
            'ср' => 'Среда',
            'чт' => 'Четверг',
            'пт' => 'Пятница',
            'сб' => 'Суббота',
            'вс' => 'Воскресенье',
        ];

        foreach ($this->attributes as $key => $value) {
            if ($key !== 'id' && $value) {
                return $days[$key];
            }
        }

        return null;
    }

    public function getNameAttribute()
    {
        return $this->day;
    }
}
