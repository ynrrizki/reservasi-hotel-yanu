<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HotelFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilitiesHotelController extends Controller
{
    public function index()
    {
        $facilitiesHotel = HotelFacility::all();
        return view('pages.admin.facilities-hotel.index', compact('facilitiesHotel'));
    }


    public function create()
    {
        return view('pages.admin.facilities-hotel.create');
    }

    public function edit($id)
    {
        $facilityHotel = HotelFacility::findOrFail($id);
        return view('pages.admin.facilities-hotel.edit', compact('facilityHotel'));
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'image']);

        $image = null;

        if ($request->file('image')) {
            $file_image = $request->file('image');
            $image = $file_image->store('images', 'public');
            // $image = url('/storage') . '/' . $image;
        }

        $data['image'] = $image;


        HotelFacility::create($data);

        return redirect()->route('admin.facilitiesHotel');
    }

    public function update(Request $request, $id)
    {
        $facilityHotel = HotelFacility::findOrFail($id);
        $data = $request->only(['name', 'description', 'image']);
        $image = null;

        if ($request->file('image')) {
            if ($request->oldImage) {
                $oldImage = $request->oldImage;
                Storage::delete(substr($oldImage, strlen(url('/storage'))));
            }
            $file_image = $request->file('image');
            $image = $file_image->store('image', 'public');
            // $image = url('/storage') . '/' . $image;
        }

        $data['image'] = $image;

        $facilityHotel->update($data);

        return redirect()->route('admin.facilitiesHotel');
    }

    public function destroy($id)
    {
        $facilityHotel = HotelFacility::findOrFail($id);

        $facilityHotel->delete();

        return back();
    }
}
