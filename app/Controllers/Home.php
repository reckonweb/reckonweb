<?php

namespace App\Controllers;

class Home extends BaseController
{


	public function index($page=''): string
	{	
		if($page=='')
		return view('home');
		else
		return view($page);	
	}
}
