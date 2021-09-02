<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function login()
	{
		// return view('welcome_message');
		$data = [
			'body' => 'login-page',
		];

		return view('auth/login');
	}

	public function register()
	{

		return view('auth/register');
	}
	public function user()
	{
		$data = [
			'body' => 'register-page',
		];

		return view('user/index');
	}
}
