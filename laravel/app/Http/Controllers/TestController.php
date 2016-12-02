<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
      return 'index';
    }

    public function create( $id = 1 ){
      return User::findOrFail($id);
      return 'create';
    }
}
