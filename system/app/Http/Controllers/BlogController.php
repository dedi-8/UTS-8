<?php 

namespace App\Http\Controllers;
use App\Blog;

class BlogController extends controller{
	function index(){
		$user = request()->user();
		$data['list_blog'] =$user->blog;
		return view('blog.index', $data);
	}

	function create(){
		return view('blog.create');
	}
	function store(){
		$blog= new Blog;
		$blog-> id_user = request()->user()->id;
		$blog-> judul = request('judul');
		$blog-> isi = request('isi');
		$blog->save();

		return redirect('blog')->with('success','Data berhasil ditambahkan');
	}
	function show(Blog $blog){
		$data['blog'] = $blog;
		return view('blog.show', $data);
	}
	function edit(Blog $blog){
		$data['blog'] = $blog;
		return view('blog.edit', $data);
	}
	function update(Blog $blog){
		$blog-> judul = request('judul');
		$blog-> isi = request('isi');
		$blog->save();

		return redirect('blog')->with('warning','Data berhasil diupdate');
	}
	function destroy(Blog $blog){
		$blog->delete();
		return redirect('blog')->with('danger','Data berhasil dihapus');
	}
	function filter(){
		$judul = request ('judul');
		$data['list_blog'] = Blog::where('judul', 'like', "%$judul%")->get();
		$data['list_blog'] = blog:: whereDate('created_at','2020-11-29')->get();
		
		$data['judul'] = $judul;

		return view('blog.index', $data);
	}
	
}