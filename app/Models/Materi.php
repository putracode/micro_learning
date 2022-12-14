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

    protected function pembelajaran(){
        return $this->hasMany(pembelajaran::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'materi'
            ]
        ];
    }
}
