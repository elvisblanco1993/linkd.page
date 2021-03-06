<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'handler',
        'user_id',
        'name',
        'bio',
        'avatar',
        'template',
        'bgtype',
        'bgvalue',
        'textcolor',
        'font',
        'btnbg',
        'btnfg',
        'btnstyle',
        'socpos',
        'soccolor'
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }

    public function theme()
    {
        return $this->hasOne(Theme::class);
    }
}
