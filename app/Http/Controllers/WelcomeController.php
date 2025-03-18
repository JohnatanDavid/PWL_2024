<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
}
/* 
//-	Menampilkan View dari Controller (Prak 4 J2)
public function greeting(){
    return view('blog.hello', ['name' => 'Andi']);
} */

public function greeting(){
        return view('blog.hello')
            ->with('name','Andi')
            ->with('occupation','Astronaut');
    }

}

