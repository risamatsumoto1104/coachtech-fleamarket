<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'profile_image',
        'postal_code',
        'address',
        'building'
    ];

    // 主キー名を変更
    protected $primaryKey = 'profile_id';

    // ユーザー
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
