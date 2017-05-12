<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    
    protected $fillable = [
    'title',
    'file',
    'category_id',
    'subcategory_id',
    'gender_id',
    'price',
    'ownermsg',
    'condition',
    'user_id',
    'phone',
    'address',
    'consent',
    'adminwhoallowed',
    'allowed',
    'removedbyuser',
    'removedbyadmin',
    'sold',
    'slug'
    ];
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'unique'=>true
            ]
            
        ];
    }

    public function images(){
        return $this->hasMany('App\Adimage');
    }

}
