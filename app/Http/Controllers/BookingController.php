<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
use App\user;
use DB;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = DB::table('bookings')->join('users', 'users.id', '=', 'bookings.user_id')
            ->select('users.name', 'bookings.*')->orderBy('date')->orderBy('time')
            ->paginate(5);
        return view('bookings.index')->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('path.addbooking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request ,[
            'date'=>'required|date|after:yesterday',
            'time'=>'required|',
            'table_number'=>'required',
        ],[
            'date.after' => 'Enter a future booking date',
        ]); 
        $booking= new booking;
        $booking->date = $request->input('date');
        $booking->time = $request->input('time');
        $booking->table_number = $request->input('table_number');
        $booking->user_id = auth()->user()->id;
        $booking->save();
        return redirect('/home')->with('success','Booking Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookings = booking::find($id);
        $user = user::find($bookings->user_id);
        return view('path.posts')->with('bookings',$bookings)->with('user',$user);
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
        $booking= booking::find($id);
        $booking->delete();
        return redirect('/home')->with('success','Booking Deleted');
    }
}
