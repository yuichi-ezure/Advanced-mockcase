<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public function createAreas()
    {
        Area::insert([
            ['name' => '東京都'],
            ['name' => '大阪府'],
            ['name' => '福岡県'],
            ['name' => '東京都'],
            ['name' => '福岡県'],
            ['name' => '東京都'],
            ['name' => '大阪府'],
            ['name' => '東京都'],
            ['name' => '大阪府'],
            ['name' => '東京都'],
            ['name' => '大阪府'],
            ['name' => '福岡県'],
            ['name' => '東京都'],
            ['name' => '大阪府'],
            ['name' => '東京都'],
            ['name' => '大阪府'],
            ['name' => '東京都'],
            ['name' => '東京都'],
            ['name' => '福岡県']
        ]);
    }
}
