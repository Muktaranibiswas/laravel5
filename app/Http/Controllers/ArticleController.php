<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/5/15
 * Time: 3:36 PM
 */

namespace App\Http\Controllers;



class ArticleController extends Controller{
    public function  __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('create');
    }

}