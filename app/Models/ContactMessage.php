<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_id',
        'name',
        'email',
        'phone',
        'description'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
