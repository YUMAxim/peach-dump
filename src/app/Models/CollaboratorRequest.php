<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    protected $fillable = [
        'title',
        'body',
        'page',
        'booksize',
        'desiredColorImpression',
        'desiredContentImpression',
        'application-deadline',
        'deadline',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
