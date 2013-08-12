<?php

class Authors extends BaseController
{
	public function index()
	{
		$view = View::make('authors.index')
				->with('title','Authors and Books')
				->with('authors',Author::orderby('name')->get());

		return $view;
	}

	public function view($id)
	{
		return View::make('authors.view')
			->with('title','Author view Page')
			->with('author',Author::find($id));
	}

	public function newAuthor()
	{
		return View::make('authors.new')
			->with('title','Add New Author');
	}

	public function create()
	{
		$validation = Author::validate(Input::all());
		if ( $validation->fails() ) {
			return Redirect::route('newAuthor')
				->witherrors($validation)
				->withinput();
		} else {
			Author::create(array(
				'name'=>Input::get('name'),
				'bio'=>Input::get('bio')
			));
			return Redirect::route('authors')->with('message','Success!');
		}

	}

	public function edit($id)
	{
		return View::make('authors.edit')
			->with('title','Edit Author')
			->with('author',Author::find($id));
	}

	public function update()
	{
		$id = Input::get('id');
		$validation = Author::validate(Input::all());

		if ( $validation->fails() ) {
			return Redirect::route('editAuthor',$id)
				->witherrors($validation);
		} else {
			$author = Author::find($id);
			$author->name = Input::get('name');
			$author->bio = Input::get('bio');
			$author->save();

			return Redirect::route('author',$id)
				->with('message','Success!');
		}
	}

	public function delete()
	{
		
		// Author::destroy(Input::get('id')); <- you can use it as well

		$author = Author::find(Input::get('id'));
		$author->delete();

		return Redirect::route('authors')
			->with('message','Success!');
	}
}