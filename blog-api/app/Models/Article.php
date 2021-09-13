<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['body', 'user_id'];

    /**
     * Get the phone associated with the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the comments for the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'foreign_key');
    }
}
