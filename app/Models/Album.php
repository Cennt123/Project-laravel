<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'title',
        'release_date',
        'genre',

    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function track()
    {
        return $this->hasMany(Track::class);
    }

    public static function list()
    {
        $albums = Album::orderByRaw('genre')->get();
        $list = [];
        foreach ($albums as $album) {
            $list[$album->id] = $album->genre;
        }

        return $list;
    }

}
