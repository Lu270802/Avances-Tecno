<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'logo',
        'banner',
        'description',
        'facebook',
        'instagram',
        'tiktok',
        'web',
        'calification',
        'qr_code',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function evaluations(){
        return $this->hasMany(Evaluation::class, 'stands_id', 'id');
    }
}
