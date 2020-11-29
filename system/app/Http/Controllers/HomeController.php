<?php 
namespace App\Http\Controllers;

class HomeController extends Controller{
	function showBeranda(){
		return view('beranda');
	}
	function showBlog(){
		return view('blog');
	}
	function showAbout(){
		return view('about');
	}
	function showKontak(){
		return view('kontak');
	}
}

