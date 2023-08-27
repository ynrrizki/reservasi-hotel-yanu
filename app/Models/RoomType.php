<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'amount'
    ];

    public function roomFacilities()
    {
        return $this->hasMany(RoomFacility::class);
    }
}
