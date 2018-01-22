<?php

Class HomeController extends Controller 
{
	
	public function index()
	{
		 //$user = $this->model('User');
			return $this->view('home');
		//return $this->view('home',['nama'=>$user->name,'umur'=>$user->umur]);
	}

	public function get_category()
	{
		$model = $this->model('User')->index();
		return $this->view('kategori',['category_name'=>$model]);
	}

	public function coba()
	{	
		$lib = $this->library('Stef_Emot')->emot("*happy* *eyeblink* *bigsmile* *laugh1* *laugh2* *bighug* *dance* *party* *roftl*");
		return $this->view('coba',['emot'=>$lib]);
	}
}
