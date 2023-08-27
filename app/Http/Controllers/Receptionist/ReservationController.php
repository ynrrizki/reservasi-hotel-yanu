<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('order')->orderBy('created_at', 'DESC');

        if (request()->has('d')) {
            $reservations = $reservations->whereRaw('DATE(created_at) = ?', [request()->d]);
        }

        if (request()->has('n')) {
            $reservations = $reservations->whereHas('order', function ($query) {
                $query->where('name', 'like', '%' . request()->n . '%');
            });
        }

        $reservations = $reservations->get();

        return view('pages.receptionist.index', compact('reservations'));
    }

    public function filterByDate(Request $request)
    {
        $item = $request->all();

        $date = $item['date'];

        return redirect()->route('receptionist', ['d' => $date]);
    }

    public function filterByName(Request $request)
    {
        $item = $request->all();

        $name = $item['name'];

        return redirect()->route('receptionist', ['n' => $name]);
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->confirm = 'TRUE';
        $reservation->update();

        return back();
    }
}
