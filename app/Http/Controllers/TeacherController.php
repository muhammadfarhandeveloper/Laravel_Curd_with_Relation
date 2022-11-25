<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Request $req){
        
        $img =  $req['image'];
        
        $name = $img->getClientOriginalName();
        
        $img->move('images',$name);
        
        
        $te = new Teacher;

        $te->name = $req['name'];
        $te->age = $req['age'];
        $te->email = $req['email'];
        $te->phone = $req['phone'];
        $te->img = $name;

        $te->save();
        return redirect('/info');
    }

    public function info(){

        $te = Teacher::all();

        return view('info')->with('te',$te);

    }

    public function delete($id){

        $te = Teacher::find($id);

        // Storage::files('images')->delete($te->img);

        // $te->delete();

        
        unlink('images/'.$te->img);
        
         $te->delete();

         return redirect('/info');

    }
   
}
