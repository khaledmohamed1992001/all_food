<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function subscribe(Request $request){
        $subs = $request->subs;
      if(isset($subs)){
        $s = new User();
        $s->subscribe = $s->follow;
        $s->save();
      };
    }
}
