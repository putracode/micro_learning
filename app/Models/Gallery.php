<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [""];
    protected $table = 'galleries';

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query,$search){
            return $query->where('title','like','%' . $search . '%');
            // ->orWhere('body','like','%' . $search . '%');
        });

        // $query->when($filters['category'] ?? false, function($query,$category){
        //     return $query->whereHas('category',function($query) use ($category){
        //         $query->where('slug',$category);
        //     });
        // });

        // $query->when($filters['user'] ?? false, fn($query,$user)=>
        //     $query->whereHas('user', fn($query)=>
        //         $query->where('username',$user)
        //     )
        // );
    }
}
