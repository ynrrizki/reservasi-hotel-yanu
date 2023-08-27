<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoomRequest;
use App\Models\ItemRoomFacility;
use App\Models\RoomFacility;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = RoomType::all();
        return view('pages.admin.room.index', compact('rooms'));
    }

    public function create()
    {
        return view('pages.admin.room.create');
    }

    public function edit($id)
    {
        $room = RoomType::findOrFail($id);

        return view('pages.admin.room.edit', compact('room'));
    }

    public function store(StoreRoomRequest $request)
    {
        $data = $request->only(['name', 'image', 'amount']);
        $image = null;
        if ($request->file('image')) {
            $file_image = $request->file('image');
            $image = $file_image->store('room_images', 'public');
            // $image = url('/storage') . '/' . $image;
        }

        $data['image'] = $image;

        RoomType::create($data);

        return redirect()->route('admin.room')->with('notif', 'Successfully added data');
    }

    public function update(Request $request, $id)
    {
        $room = RoomType::findOrFail($id);

        $data = $request->only(['name', 'image', 'amount']);
        $image = null;
        if ($request->file('image')) {
            if ($request->oldImage) {
                $oldImage = $request->oldImage;
                Storage::delete(substr($oldImage, strlen(url('/storage'))));
            }

            $file_image = $request->file('image');
            $image = $file_image->store('room_images', 'public');
            // $image = url('/storage') . '/' . $image;
        }

        // dd($image);

        $data['image'] = $image;

        $room->update($data);

        return redirect()->route('admin.room')->with('notif', 'Successfully updated data');
    }

    public function destroy($id)
    {
        $room = RoomType::findOrFail($id);
        $image = $room->image;
        $facilities = RoomFacility::where('room_type_id', $id)->get();
        foreach ($facilities as $facility) {
            ItemRoomFacility::where('room_facility_id', $facility->id)->delete();
        }

        Storage::delete(substr($image, strlen(url('/storage'))));
        $room->delete();
        RoomFacility::where('room_type_id', $id)->delete();

        return back()->with('notif', 'Successfully deleted data');;
    }
}
