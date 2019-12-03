<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class ViewController extends Controller
{
    //
    public function master()
  {
      return view('view.master',[
          'msg'=>'こんにちは',
      ]);
  }
    public function comp()
  {
      return view('view.comp',[
          'msg'=>'こんにちは',
      ]);
  }
    public function list()
  {
      $data =[
          'records'=>Book::all()
      ];
      return view('view.list',$data);
  }
}
