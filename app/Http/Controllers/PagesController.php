<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  /*Navigation Main Pages */
public function index(){
return view('pages.index');
}

/*Navigation Main Pages */
public function services(){
return view('pages.services');
}

/*Navigation Main Pages */
public function email(){
return view('pages.email');
}

/*Navigation Main Pages */
public function agents(){
return view('pages.agents');
}

/*Navigation Main Pages */
public function consultation(){
return view('pages.consultation');
}

/*Navigation Main Pages */
public function admin(){
return view('pages.admin');
}

/*Navigation Main Pages */
public function portfolio(){
return view('pages.portfolio');
}

/*Navigation Main Pages */
public function users(){
return view('pages.users');
}

public function contactus(){
return view('pages.contactus');
}

}
