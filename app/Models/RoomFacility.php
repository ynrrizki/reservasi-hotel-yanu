<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFacility extends Model
{
    use HasFactory;

    protected $fillable = ['room_type_id'];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function itemRoomFacilities()
    {
        return $this->hasMany(ItemRoomFacility::class);
    }
}
