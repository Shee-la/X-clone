<?php

namespace App\Http\Controllers;
use App\Models\Idea;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
    
    //creating an array logic of peoples names that will be accessed by the appropriate view file.
    /* $users = [
        ['name' => 'alex', 'age' => '3'],
        ['name' => 'Dan', 'age' => '25'],
        ['name'=>'John', 'age' =>'17']
    ];
        return view('dashboard', ['users' => $users ]
    );*/
$idea = new idea(['content'=> 'my twitter']);
$idea-> save();

return view ('dashboard', [
    'ideas'=>idea::orderBy('created_at', 'Desc')->get()
]);
    }
}
