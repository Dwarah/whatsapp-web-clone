<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'room_id',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}