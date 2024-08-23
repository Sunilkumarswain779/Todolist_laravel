<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class Student_data extends Controller
{
    //
   public function show(){
    $user=DB::table('students')->simplePaginate(7);
    return view('data',['data'=>$user]);
   }
   public function details(string $id){
    $user=DB::table('students')
    ->where('id',$id)->get();
    return view('details',['data'=>$user]);
   }
   public function delete(string $id){
    DB::table('students')->where('id', $id)->delete();
    return redirect()->route('student.data');
   }
   public function form(){
    return view('form');
   }
   public function insert_data(Request $req){

    $user=DB::table('students')->insert([
        'name'=>$req->name,
        'marks'=>$req->mark
        ]);
        return redirect()->route('student.data');
    }
    public function update_data(string $id){
        $user=DB::table('students')
        ->where('id',$id)->first();
        return view('update',['data' => $user]);
    }
    public function update_user(Request $req, $id){
        $user=DB::table('students')->where('id', $id)
        ->update([
            'name'=>$req->name,
            'marks'=>$req->mark
        ]);
        //   return redirect()->route('student.data');
           return view::make('data');
    }
}
