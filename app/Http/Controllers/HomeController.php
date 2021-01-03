<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use Redirect;
use App\User;
use App\Models\Customer;
use App\Models\Booking;
use App\Models\PropertyDetail;
use Illuminate\Support\Facades\Session;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function __construct(){
    //     $this->middleware(function ($request, $next) {
    //         $this->user= Auth::user();
    //         if(auth()->user()){

    //         }
    //         else{
    //             return redirect('/login');
    //         }
    //         return $next($request);
    //     });
    // }

    public function index(){
        // $zoneParking = PropertyDetail::get();
        // $zoneParkingData = array();

        // foreach ($zoneParking as $item) {
        //     if(isset($zoneParkingData[$item->zone->name])){
        //         $zoneParkingData[$item->zone->name]++;
        //     }
        //     else{
        //         $zoneParkingData[$item->zone->name] = 1;
        //     }
        // }
        // $data = array(
        //     'customerCount' => (Customer::get())->count(),
        //     'boookingCount' => (Booking::where([["booking_status", "1"]])->get())->count(),
        //     'todayParkingCount' => (Booking::where([["booking_status", "0"], ['created_at', '=', Carbon::today()]])->get())->count(),
        //     'parkingCount' => (Booking::where([["booking_status", "0"]])->get())->count(),
        //     'payments' => ((Booking::get())),
        //     'zoneParking' => json_encode($zoneParkingData),
        //     'bookings' => Booking::with('user.customer')->orderBy('id', 'desc')->limit(5)->get(),
        //     "userDetails" => Customer::orderBy('id', 'desc')->limit(5)->get()
        // );
        return view('admin.pages.home');
    }


}
