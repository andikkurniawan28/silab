<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'region',
    ];
    
    public static function rangkingByPost($min, $max)
    {
        $i = 1;
        $posts = Post::all();
        foreach($posts as $post)
        {
            $data['core_ek'][$i]['region'] = $post->region;
            $data['core_ek'][$i]['rit'] = Core_ek::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', '%'.$post->code.'%')
                ->count('barcode_antrian');

            $data['core_ek'][$i]['brix'] = Core_ek::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', '%'.$post->code.'%')
                ->avg('brix_nira');

            $data['core_ek'][$i]['pol'] = Core_ek::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', '%'.$post->code.'%')
                ->avg('pol_nira');

            $data['core_ek'][$i]['rendemen'] = Core_ek::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', '%'.$post->code.'%')
                ->avg('rendemen'); 

            $data['core_eb'][$i]['region'] = $post->region;
            $data['core_eb'][$i]['rit'] = Core_eb::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', '%'.$post->code.'%')
                ->count('barcode_antrian');

            $data['core_eb'][$i]['brix'] = Core_eb::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', '%'.$post->code.'%')
                ->avg('brix_nira');

            $data['core_eb'][$i]['pol'] = Core_eb::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', '%'.$post->code.'%')
                ->avg('pol_nira');

            $data['core_eb'][$i]['rendemen'] = Core_eb::whereBetween('created_at', [$min, $max])
                ->where('register', 'like', '%'.$post->code.'%')
                ->avg('rendemen');

            $i++;
        }
        return $data;
    }
}
