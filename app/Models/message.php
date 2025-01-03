<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'phone',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
