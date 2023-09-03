<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    // Здесь объявляем константы для имен файлов и подписей фото
    const INTEREST_DATA = [
        [
            'hobbyName' => 'Любимое хобби',
            'caption' => 'Мои увлечения, любимые занятия на досуге, для себя',
            'reference' => 'hobbies#hobby',
        ],
        [
            'hobbyName' => 'Любимая музыка',
            'caption' => 'Мои любимые музыкальные испольнители, музыкальные жанры',
            'reference' => 'hobbies#music',
        ],
        [
            'hobbyName' => 'Любимые видеоигры',
            'caption' => 'Мой список любимых игр из игровой торговой площадки Steam',
            'reference' => 'hobbies#videogames',
        ],
        // Добавьте другие фото...
    ];
    
    // Остальной код модели...
}
