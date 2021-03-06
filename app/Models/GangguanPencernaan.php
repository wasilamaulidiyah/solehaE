<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GangguanPencernaan extends Model
{
    protected $fillable = [
        'user_id',
        'soal1',
        'soal2',
        'soal3',
        'soal4',
        'soal5',
        'soal6',
        'gambar',
        'feedback',
    ];

    public static function types()
    {
        return [
            'text' => 'Text',
        ];
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
