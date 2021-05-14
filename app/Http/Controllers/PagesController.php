<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
use App\user;
use DB;
use Carbon\Carbon;
class PagesController extends Controller
{
    public function login(){
        return view('path.login');
    }
    public function register(){
        return view('path.register');
    }
    
    public function searchname(){
        return view('path.searchname');
    }
    public function searchdate(){
        return view('path.searchdate');
    }
    public function searchnameres(Request $request){
        // $user = DB::table('users')->where('name', '=', $request->name)->get()[0];
        // $bookings = DB::table('bookings')->where('user_id', '=', $user->id)->orderBy('date')
        // ->orderBy('time')->get();
        $bookings = DB::table('users')->where('name', '=', $request->name)
            ->join('bookings', 'bookings.user_id', '=', 'users.id')
            ->select('users.name', 'bookings.*')->orderBy('date')->orderBy('time')
            ->get();
        return view('path.searchres')->with('bookings',$bookings);
    }
    
    public function searchdateres(Request $request){
        $bookings = DB::table('bookings')->where('date', '=', $request->date)
            ->join('users', 'users.id', '=', 'bookings.user_id')
            ->select('users.name', 'bookings.*')->orderBy('date')->orderBy('time')
            ->get();
        return view('path.searchresdate')->with('bookings',$bookings);
    }

    public function getTable(Request $request){
        $bookings=DB::table('bookings')->where('date','=',$request->date)->where('time','=',$request->time)->get();
        $a=array();
        foreach($bookings as $booking){
            array_push($a,$booking->table_number);
        }
        // $html="<option value=$a[0]>$a[0]</option>";
        $html="";
        for ($x = 1; $x <= 30; $x++) {
            if (!in_array($x, $a))
            {
                $html.="<option value=$x>$x</option>";
            }
        }
        return $html;
    }
    
    public function destroypast(){
        $bookings=DB::table('bookings')->where('date','<',Carbon::now()->toDateString())->get();
        
        foreach($bookings as $booking){
            $id=$booking->id;
            $book= booking::find($id);
            $book->delete();
        }

        $bookings=DB::table('bookings')->where('date','=',Carbon::now()->toDateString())
        ->where('time','<',Carbon::now()->toTimeString())->get();
        
        foreach($bookings as $booking){
            $id=$booking->id;
            $book= booking::find($id);
            $book->delete();
        }
    }

    public function addbooking(){
        return view('path.addbooking');
    }
    
}