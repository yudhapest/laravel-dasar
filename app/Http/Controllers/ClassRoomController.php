<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index()
    {
        $class = ClassRoom::with('students')->get();
        return view('class', ['classList' => $class]);
    }
}
