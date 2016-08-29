<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Post;


class PostsController extends Controller
{

	/**
	 * Create Blog Post
	 * 
	 * @return Response
	 */
	public function createPost()
	{
		return view('blog.create');
	}

	/**
	 * Submit Blog Post
	 *
	 * @return  Response
	 */
	public function submitPost(Request $request)
	{

		//validate the input
		$this->validate($request, [
			'title' => 'required|string|min:3|max:42',
			'content' => 'required|string|max:3000'
		]);
		

		$post = new Post;
		$post->title = $request->input('title');
		$post->content = $request->input('content');
		$post->save();

		return view('blog.posted');
	}

	/**
	 * Display Blog Post by ID
	 * 
	 * @return Response
	 */
	public function showPost($id)
	{
		$post = Post::find($id);

		return view('blog.post', ['post' => $post]);
	}

	/**
	 * Display Blog Posts
	 * 
	 * @return Response
	 */
	public function showPosts()
	{
		$posts = Post::all();

		return view('blog.posts', ['posts' => $posts]);
	}
}