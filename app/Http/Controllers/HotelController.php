<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function index(){
        $hotels = Hotel::all();
        return view('hotelList', compact('hotels'));
    }
    public function show($id)
    {
        $hotels = Hotel::findOrFail($id);
        return view('details', compact('hotels'));
    } 
    
}