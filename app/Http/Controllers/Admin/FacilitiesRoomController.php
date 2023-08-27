<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ItemRoomFacility;
use App\Models\RoomFacility;
use App\Models\RoomType;
use Illuminate\Http\Request;

class FacilitiesRoomController extends Controller
{
    public function index()
    {
        $itemRoomFacilities = ItemRoomFacility::with(['roomFacility', 'roomFacility.roomType'])->get();


        return view('pages.admin.facilities-room.index', compact('itemRoomFacilities'));
    }


    public function create()
    {
        $roomTypes = RoomType::all();
        return view('pages.admin.facilities-room.create', compact('roomTypes'));
    }

    public function edit($id)
    {
        $roomTypes = RoomType::all();
        $itemRoomFacility = ItemRoomFacility::with(['roomFacility', 'roomFacility.roomType'])->findOrFail($id);

        return view('pages.admin.facilities-room.edit', compact('itemRoomFacility', 'roomTypes'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $roomFacility = RoomFacility::create([
            'room_type_id' => $data['room_type_id'],
        ]);

        ItemRoomFacility::create([
            'room_facility_id' => $roomFacility->id,
            'name' => $data['name'],
        ]);

        return redirect()->route('admin.facilitiesRoom');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $facilityRoom = ItemRoomFacility::findOrFail($id);

        $facilityRoom->update($data);

        return redirect()->route('admin.facilitiesRoom');
    }

    public function destroy($id)
    {
        $facilityRoom = ItemRoomFacility::findOrFail($id);
        $facilityRoom->delete();

        return back();
    }
}
