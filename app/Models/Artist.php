<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $fillable = [
        'artist_name',
        'genre',
        'origin',

    ];

    public function album()
    {
        return $this->hasMany(Album::class);
    }


    public static function list()
    {
        $artists = Artist::orderByRaw('artist_name')->get();
        $list = [];
        foreach ($artists as $artist) {
            $list[$artist->id] = $artist->artist_name;
        }

        return $list;
    }

}
