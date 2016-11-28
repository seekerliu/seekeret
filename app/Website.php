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
        'name', 'link', 'logo', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getLogoAttribute($path)
    {
        return asset(\Storage::url($path));
    }
}
