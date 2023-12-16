<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id', 
        'title', 
        'duration', 
        'composer', 
        'track_number'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }


}
