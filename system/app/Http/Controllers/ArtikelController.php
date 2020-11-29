<?php

namespace App\Http\Controllers;
use App\Blog;

class ArtikelController extends Controller
{
	function ShowArtikel(){
		$data['list_blog'] = Blog::all();
		return view('artikel', $data);
	}

	function show(Blog $blog){
		$data['blog'] = $blog;
		return view('artikel', $data);
	}
}