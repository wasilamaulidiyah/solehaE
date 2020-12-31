<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelKucing extends Model
{
    protected $fillable = 
    [
        'id',
        'user_id',
        'judul', 
        'author',
        'gambar', 
        'konten', 
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
