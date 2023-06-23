<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\contact;
use App\Models\tours;
use App\Models\tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showPagecontact(){
        return view('contact');
    }
    public function showPagehome(){
        return view('index');
    }
    public function showPageoffers(){
        $tours = tours::all();
        return view('offers',compact('tours'));
    }
    public function showPagenews(){
        return view('news');
    }
    public function showPageaboutus(){
        return view('about-us');
    }

    public function storePagecontact(Request $request){
        $data_contact = [
            'sender_name' => $request->input('sender_name'),
            'email' => $request->input('email'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ];
        contact::create($data_contact);
        return redirect()->back()->with('thanhcong','Gửi message thành công');
    }
    public function search(Request $request){
        $keyword=$request->keyword_submit;
        $startday=$request->date_checkin;
        $finishday=$request->date_checkout;
        $search_tours = DB::table('tours')->where('destination', 'like', '%'.$keyword.'%')->where('start_date','=', $startday)->where('back_date','=', $finishday)->get();
        return view('offers_search',compact('search_tours'));
    }
    public function storeSearch($id, Request $request) {
        if (Auth::check())
        {
            tickets::create([
                'tour_id' => $id,
                'user_id' => $request->user_id,
                'place_start' => $request->bookTourInfo_Customor_department_place,
                'name' => $request->bookTourInfo_Customor_name,
                'phone_number' => $request->bookTourInfo_Customor_phoneNumber,
                'email' => $request->bookTourInfo_Customor_email
            ]);
            return redirect()->to('offers')->with('message', 'BẠN ĐÃ ĐĂNG KÝ TOUR THÀNH CÔNG');
        }
        else
        {
            return redirect('/login')->with('message','Bạn phải đăng nhập để mua vé!');
        }

       
        
    }

    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20',
        ]);
        
        if ($request->password == $request->password_cf)
        {

            // Hash Password -mã hóa password
            $request['password'] = bcrypt($request['password']);

            users::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' =>$request->phone_number,
                'password' => $request->password,
            ]);

            
            return redirect('/login')->with('message', 'Completed the registration');
        }
        return back()->with('message','Something wrong');
    }

    public function loginUser(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:20',
        ]);


        $user = users::where('email', '=', $request->email)->first();

        if ($user){
            if(auth()->attempt($formFields) || $request->password == $user->password)
            {
                $request->session()->put('Id', $user->id);
                auth()->login($user);
                return redirect('/')->with('message', 'đăng nhập thành công!');;
            }else{
                return back()->with('message', 'Password not matches');
            }
        }
        else {
            return back()->with('message', 'This email in not registered');
        }
    }

    

    // Logout

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login')->with('message','Bạn đã đăng xuất');
    }

}
