<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mysql_external';

    protected $fillable = ['title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
