<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'path',
        'user_id',
        'team_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
