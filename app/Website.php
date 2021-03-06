<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'link', 'logo', 'category_id', 'order'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getLogoAttribute($path)
    {
        if(!empty($path)) {
            return asset(\Storage::url($path));
        }
    }
}
