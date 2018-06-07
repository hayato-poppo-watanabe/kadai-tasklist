<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasklistController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $microposts = $user->tasklist()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'microposts' => $tasklist,
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
        }else {
            return view('welcome');
            }
    }
}
