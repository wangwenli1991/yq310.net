@extends('layouts.app')

@section('content')



<form action='{{ url('/home/updatearticle') }}/{{ $id }}' method="POST" class="form-horizontal">
    {{ csrf_field() }}
   id: <input type="text" name="id" value="{{ $id }}"><hr>
   title: <input type="text" name="title" value="{{ $article->title }}" ><hr>
   body: <input type="text" name="body" value="{{ $article->body }}"><hr>
   description: <input type="text" name="description" value="{{ $article->description }} "><hr>
   category_id: <input type="text" name="category_id" value="{{ $article->category_id }}" ><hr>
   image_url: <input type="text" name="image_url" value="{{ $article->image_url }}" ><hr>
   author_id: <input type="text" name="author_id" value="{{ $article->author_id }}" ><hr>
   author: <input type="text" name="author" value="{{ $article->author }}" ><hr>


   <input type="submit" ><hr>
</form>




@endsection
