<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\HotelFacility;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\RoomFacility;
use App\Models\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class ClientController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function room()
    {
        $rooms = RoomType::with('roomFacilities', 'roomFacilities.itemRoomFacilities')->get();
        return view('pages.room', compact('rooms'));
    }

    public function facilities()
    {
        $facilities = HotelFacility::all();
        return view('pages.facilities', compact('facilities'));
    }

    public function confirmation(StoreOrderRequest $request)
    {
        $data = $request->validated();
        if (!$data) {
            return back()->withErrors($data->errors());
        }

        // dd($data);

        $roomTypes = RoomType::all();
        return view('pages.confirmation', compact('data', 'roomTypes'));
    }

    public function order(StoreOrderRequest $request)
    {
        $data = $request->validated();

        return redirect()->route('confirmation', [
            'checkin'   => $data['checkin'],
            'checkout'  => $data['checkout'],
            'amount'    => $data['amount'],
        ]);
    }

    public function confirmStore(Request $request)
    {
        $data = $request->only(['checkin', 'checkout', 'amount', 'name', 'email', 'phone', 'guest_name', 'room_type']);


        $order = Order::create([
            'name' => $data['name'],
            'guest_name' => $data['guest_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'room_type_id' => $data['room_type'],
        ]);

        Reservation::create([
            'order_id' => $order->id,
            'checkin' => $data['checkin'],
            'checkout' => $data['checkout'],
            'amount' => $data['amount']
        ]);


        return redirect()->route('proof', [
            'id' => $order->id,
            'checkin'   => $data['checkin'],
            'checkout'  => $data['checkout'],
            'amount'    => $data['amount'],
            'name'    => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'guest_name' => $data['guest_name'],
            'room_type' => $data['room_type']
        ]);
    }

    public function proof(Request $request)
    {
        $data = $request->all();
        if (!$data) {
            return redirect()->route('home');
        }
        $checkin = Carbon::parse($data['checkin']);
        $checkout = Carbon::parse($data['checkout']);
        $data['checkin'] = $checkin->format('j F Y');
        $data['checkout'] = $checkout->format('j F Y');
        // dd($data);
        $roomType = RoomType::where('id', $data['room_type'])->first();
        $order = Order::where('id', $data['id'])->first();
        return view('pages.proof', compact('data', 'roomType', 'order'));
    }
}
