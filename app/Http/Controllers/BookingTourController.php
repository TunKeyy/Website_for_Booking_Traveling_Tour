<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tickets;
use Illuminate\Support\Facades\Auth;

class BookingTourController extends Controller
{
    private $ticket;

    public function __construct(tickets $ticket) {
        $this->ticket = $ticket;
    }

    public function store($id, Request $request) {
        if (Auth::check())
        {
            $this->ticket->create([
                'tour_id' => $id,
                'place_start' => $request->bookTourInfo_Customor_department_place,
                'name' => $request->bookTourInfo_Customor_name,
                'user_id' => $request->user_id,
                'phone_number' => $request->bookTourInfo_Customor_phoneNumber,
                'email' => $request->bookTourInfo_Customor_email
            ]);
            return back()->with('message', 'BẠN ĐÃ ĐĂNG KÝ TOUR THÀNH CÔNG');
        }
        else
        {
            return redirect('/login')->with('message','Bạn phải đăng nhập để mua vé!');
        }
    }
    
}
