<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // Здесь объявляем константы для имен файлов и подписей фото
    const PHOTO_DATA = [
        [
            'filename' => '1.jpg',
            'caption' => 'Голубое озеро',
        ],
        [
            'filename' => '2.jpg',
            'caption' => 'Закат в городе',
        ],
        [
            'filename' => '3.jpg',
            'caption' => 'Зелёный лес',
        ],
        [
            'filename' => '4.jpg',
            'caption' => 'Мальчик на машине',
        ],
        [
            'filename' => '5.jpg',
            'caption' => 'Мегаполис',
        ],
        [
            'filename' => '6.jpg',
            'caption' => 'Морская деревня',
        ],
        [
            'filename' => '7.jpg',
            'caption' => 'Осенняя река',
        ],
        [
            'filename' => '8.jpg',
            'caption' => 'Осень',
        ],
        [
            'filename' => '9.jpg',
            'caption' => 'Поляна',
        ],
        [
            'filename' => '10.jpg',
            'caption' => 'Раритетная машина в лесу',
        ],
        [
            'filename' => '11.jpg',
            'caption' => 'Свадьба на природе',
        ],
        [
            'filename' => '12.jpg',
            'caption' => 'Скамья у озера',
        ],
        [
            'filename' => '13.jpg',
            'caption' => 'Суматоха в баре',
        ],
        [
            'filename' => '14.jpg',
            'caption' => 'Шимпанзе',
        ],
        [
            'filename' => '15.jpg',
            'caption' => 'Японский город',
        ],
        // Добавьте другие фото...
    ];
    
    // Остальной код модели...
}
