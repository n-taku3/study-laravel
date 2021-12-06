<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\User;
use App\Models\Foo;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
  public function show($id)
  {
    $foos = Foo::all();
    $builder_foo = DB::Table('foos')->where('name', 'Hello')->get();
    return view('user.profile', compact('id', 'foos', 'builder_foo'));
  }
}
