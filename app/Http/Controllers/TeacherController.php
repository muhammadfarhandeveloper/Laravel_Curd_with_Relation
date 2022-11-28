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

        if(!is_null($te)){

            
            unlink('images/'.$te->img);
            
            $te->delete();
        }
        
         return redirect('/info');

    }
    public function update($id){

        $te = Teacher::find($id);

        if(!is_null($te)){

        return view('update')->with('te',$te);            

        }

        return redirect('info');
    }
    public function updatete(Request $req, $id){

            $te = Teacher::find($id);

            if(!is_null($te)){

                if($req['image'] != null){

                    $img =  $req['image'];
        
                    $name = $img->getClientOriginalName();
                    
                    $img->move('images',$name);

                    unlink('images/'.$req['oldimg']);
                    
                    $te->name = $req['name'];
                    $te->age = $req['age'];
                    $te->email = $req['email'];
                    $te->phone = $req['phone'];
                    $te->img = $name;
                    $te->save();
                }
                else{
                     
                    $te->name = $req['name'];
                    $te->age = $req['age'];
                    $te->email = $req['email'];
                    $te->phone = $req['phone'];
                    $te->save();
                }

            }

            return redirect('/info');
            
    }
   
}
