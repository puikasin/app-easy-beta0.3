<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($question) {
            $question->slug = $question->title;
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

//    protected $guarded = [];
    protected $fillable = ['title', 'slug', 'body', 'user_id', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute()
    {
        return "/question/$this->slug";
    }
}
