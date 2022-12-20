<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Pembelajaran extends Model
{
    use HasFactory;

    use HasFactory;
    use Sluggable;

    protected $guarded = [""];
    protected $table = 'pembelajarans';

    protected function materi(){
        return $this->hasMany(materi::class);
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
