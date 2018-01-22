<?php

Class Controller 
{
	public function view($load,$data =[])
	{
		require_once '../app/view/'.$load.'.php';
	}

	public function model($model)
	{
		require_once '../app/model/'.$model.'.php';

		return new $model();
	}

	public function library($library)
	{
		require_once '../app/library/'.$library.'.php';

		return new $library();

	}
}
