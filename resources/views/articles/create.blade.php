@extends('layouts.application')

@section('content')
<h1>New Article</h1>

<form action="{{ route('articles.store') }}" accept-charset="UTF-8" method="post">
    @csrf
    
    <div>
      <label for="article_title">Title</label><br>
      <input type="text" name="article[title]" id="article_title">
    </div>
  
    <div>
      <label for="article_body">Body</label><br>
      <textarea name="article[body]" id="article_body"></textarea><br>
    </div>

    <div>
      <input type="submit" name="commit" value="Create Article" data-disable-with="Create Article">
    </div>
</form>
@endsection