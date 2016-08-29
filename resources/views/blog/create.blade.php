@extends('layouts.master')

@section('content')

        <h1>Create Post</h1>

        <br />


        <form method="post" action="/submit">
          <input type="text" name="title" placeholder="Title.." style="margin-bottom: 20px;" />

          <textarea name="content" placeholder="Blog Content.."></textarea>

          <br /><br />
          <input type="submit" value="Submit Post" />
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>

@endsection