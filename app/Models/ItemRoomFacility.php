<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRoomFacility extends Model
{
    use HasFactory;


    protected $fillable = ['room_facility_id', 'name'];

    public function roomFacility()
    {
        return $this->belongsTo(RoomFacility::class);
    }
}
