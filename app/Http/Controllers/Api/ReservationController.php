<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return ReservationResource::collection(Reservation::all());
    }

    public function store(ReservationRequest $reservationRequest)
    {
        try {
            $reservation = Reservation::create($reservationRequest->validated());
            return response()->json([['errors' => false], ['data' => new ReservationResource($reservation)]]);
        } catch (\Exception $exception) {
            return response()->json([['data' => null], ["errors" => true]]);
        }
    }

    public function show(Reservation $reservation)
    {
        return new ReservationResource($reservation);
    }

    public function update(ReservationRequest $reservationRequest, Reservation $reservation)
    {
        $reservation->update($reservationRequest->validated());
        return new ReservationResource($reservation);

    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return response()->noContent();
    }
}
