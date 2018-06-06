@extends('layouts.app')

@section('content')



<form action='{{ url('/home/storearticle') }}' method="POST" class="form-horizontal">
    {{ csrf_field() }}
   id: <input type="text" name="id"><hr>
   title: <input type="text" name="title"><hr>
   body: <input type="textarea" name="body"><hr>
   description: <input type="text" name="description"><hr>
   catalog_id: <input type="text" name="category_id"><hr>
   image_url: <input type="text" name="image_url"><hr>
   author_id: <input type="text" name="author_id"><hr>
   author: <input type="text" name="author"><hr>
   <input type="submit" ><hr>
</form>




@endsection
