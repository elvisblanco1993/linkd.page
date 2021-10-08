<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'page_id',
        'type',
        'title',
        'url',
        'order',
        'uuid',
        'clickthrough',
    ];

    use HasFactory;

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

}
