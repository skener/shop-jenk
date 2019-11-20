<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewsRequest;
use App\News;
use Illuminate\Http\Request;


class NewsController extends Controller {

	public function index () {

		$news = News::latest ()->paginate ( 5 );

		return view ( 'admin.news.index', compact ( 'news' ) );

	}

	public function create () {

		return view ( 'admin.news.create' );

	}


	public function store ( CreateNewsRequest $request ) {

		News::create ( $request->all () );

		return redirect ()->route ( 'admin.news.index' )
		                  ->with ( 'success', 'News created successfully' );

	}


	public function show ( $id ) {

		$news = News::find ( $id );

		return view ( 'admin.news.show', compact ( 'news' ) );

	}


	public function edit ( $id ) {

		$news = News::find ( $id );

		return view ( 'admin.news.edit', compact ( 'news' ) );

	}


	public function update ( CreateNewsRequest $request, $id ) {

		News::find ( $id )->update ( $request->all () );

		return redirect ()->route ( 'admin.news.index' )
		                  ->with ( 'success', 'News updated successfully' );

	}


	public function destroy ( $id ) {

		News::find ( $id )->delete ();

		return redirect ()->route ( 'admin.news.index' )
		                  ->with ( 'success', 'News deleted successfully' );

	}

}
