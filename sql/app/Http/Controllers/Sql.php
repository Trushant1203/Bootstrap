<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Sql extends Controller
{
    function show(){

       // DB::insert('insert into student(name,email,city) values(?,?,?)',['Yash','yash@123','Surat']);

       //DB::update('update student set city=? where id=?',['Bhavnagar',4]);

       // DB::delete('delete from student where id=?',[4]);

        DB::unprepared('delete from student where id=4');

        $student=DB::select('select * from student');

        $student1=DB::select('select * from student where id = ?',['1']);
        
        $student2=DB::select('select * from student where city = ?',['Bhavnagar']);
        //dd($student);
        return view('sql',['student'=>$student,'student1'=>$student1,'student2'=>$student2]);
        
    }
}
