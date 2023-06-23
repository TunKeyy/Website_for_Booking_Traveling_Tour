<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tours;
use App\Models\tickets;
use App\Models\blogs;
use App\Models\contact;
use App\Models\users;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // đếm các dòng trong bảng, lấy ra số lượng user, ticket, tour, blog có trong CSDL
        $user_count = DB::table('users')
        ->count('*');

        $ticket_count = DB::table('tickets')
        ->count('*');

        $tour_count = DB::table('tours')
        ->count('*');

        $blog_count = DB::table('blogs')
        ->count('*');

        // xem số lượng ticket mầ mỗi tour đã được đặt
        $tour_ticket = DB::select('
        select destination, tours.id, count(tickets.id) as sl_ticket
        from tours, tickets
        where tours.id = tickets.tour_id
        group by tours.destination,tours.id ;
        ');

        return view('admin.index',[
            'user_count' => $user_count,
            'ticket_count' => $ticket_count,
            'tour_count' => $tour_count,
            'blog_count' => $blog_count,
            'tour_tickets' => $tour_ticket,
        ]);
    }

    public function user()
    {
        $users = DB::table('users')
        ->select('id','name','email','level')
        ->get();

        return view('admin.users',[
            'users'=> $users
        ]);
    }

    public function addUser(Request $request)
    {
        $formfield = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' =>'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        // Hash Password
        $formfield['password'] = bcrypt($formfield['password']);

        users::create($formfield);

        return back()->with('message',"Thêm thành công");
    }

    public function deleteUser(Request $request)
    {
       DB::delete('delete from users where id = ?', [ $request->user_id ]);
        return back()->with('message',"Xóa thành công");
    }

    public function updateUser(Request $request)
    {
        $formfield = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'level' => 'required',
        ]);

        DB::update('
        update users
        set name = ?, email = ?, phone_number = ?, level= ?
        where id = ?
        ', [$request->name ,$request->email ,$request->phone_number ,$request->level,
        $request->user_id]);

        return back()->with('message',"Cập nhật thành công");
    }
    
    public function ticket()
    {
        $tickets = DB::table('tickets')
        ->select('id','tour_id','place_start','user_id')
        ->get();

        return view('admin.tickets',[
            'tickets' => $tickets
        ]);
    }

    public function addTicket(Request $request)
    {
        $formfield = $request->validate([
            'tour_id' => 'required|integer',
            'user_id' => 'required|integer',
            'place_start' => 'nullable'
        ]);

        if ($request->place_start)
        {
            tickets::create($formfield);
        }
        else
        {
            tickets::create([
                'tour_id' => $request->tour_id,
                'user_id' => $request->user_id,
                'place_start' => 'null'
            ]);
        }

        return back()->with('message',"Thêm thành công");
    }

    public function deleteTicket(Request $request)
    {
        DB::delete('delete from tickets where id = ?', [ $request->ticket_id ]);
        return back()->with('message',"Xóa thành công");
    }

    public function updateTicket(Request $request)
    {
        $formfield = $request->validate([
            'ticket_id' => 'required',
            'tour_id' => 'required',
            'user_id' => 'required',
            'place_start' => 'required',
        ]);

        DB::update('
        update tickets
        set tour_id = ?, place_start = ?, user_id = ?
        where id = ?
        ', [$request->tour_id ,$request->place_start ,$request->user_id,
        $request->ticket_id]);

        return back()->with('message',"Cập nhật thành công");
    }

    public function tour()
    {
        $tours = DB::table('tours')
        ->select('id','destination','description','image','start_date as start','back_date as back', 'price')
        ->get();
        
        return view('admin.tours',[
            'tours' => $tours
        ]);
    }

    public function addTour(Request $request)
    {
        $formfield = $request->validate([
            'destination' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'start_date' => 'required',
            'back_date' => 'required',
        ]);

        tours::create($formfield);

        return back()->with('message',"Thêm thành công");
    }

    public function deleteTour(Request $request)
    {
       DB::delete('delete from tours where id = ?', [ $request->tour_id ]);
        return back()->with('message',"Xóa thành công");
    }

    public function updateTour(Request $request)
    {
        $formfield = $request->validate([
            'destination' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'start_date' => 'required',
            'back_date' => 'required',
            'tour_id' =>'required'
        ]);

        DB::update('
        update tours
        set destination = ?, description = ?, price = ?, image = ?, start_date= ?, back_date = ?
        where id = ?
        ', [$request->destination ,$request->description ,$request->price ,$request->image ,$request->start_date ,$request->back_date ,
        $request->tour_id]);

        return back()->with('message',"Cập nhật thành công");
    }

    public function blog()
    {
        $blogs = DB::table('blogs')
        ->select('id','title','description as desc','image','date_post')
        ->get();

        return view('admin.blogs',[
            'blogs' =>$blogs
        ]);
    }

    public function addBlog(Request $request)
    {
        $formfield = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'date_post' => 'nullable',
        ]);

        $formfield['date_post'] = Carbon::now();
        

        blogs::create($formfield);

        return back()->with('message',"Thêm thành công");
    }

    public function deleteblog(Request $request)
    {
        DB::delete('delete from blogs where id = ?', [ $request->blog_id ]);
        return back()->with('message',"Xóa thành công");
    }

    public function updateBlog(Request $request)
    {
        $formfield = $request->validate([
            'blog_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        DB::update('
        update blogs
        set title = ?, description = ?, image = ?
        where id = ?
        ', [$request->title ,$request->content ,$request->image,
        $request->blog_id]);

        return back()->with('message',"Cập nhật thành công");
    }


    public function contact()
    {
        $contacts = DB::table('contacts')
        ->select('id','sender_name','email','title','content')
        ->get();

        return view('admin.contact',compact('contacts'));
    }
    public function deletecontact(Request $request)
    {   
        $deleteContact = $request['contact_id'];
        $needtoDelete = contact::find($deleteContact);
        $needtoDelete->delete();
        
        

        return redirect()->back()->with('thanhcong','Xóa thành công');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
