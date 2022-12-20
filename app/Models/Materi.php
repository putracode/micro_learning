<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Materi extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [""];
    protected $table = 'materis';

    public function pembelajaran(){
        return $this->belongsTo(pembelajaran::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
