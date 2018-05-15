@extends('layouts.app')

@section('content')

<table sytle="boder:1px;">
    <tr>
    <th>id</th>
    <th>title</th>
    <th>body</th>
    <th>description</th>
    <th>catalog_id</th>
    <th>image_url</th>
    <th>author_id</th>
    <th>author</th>
    </tr>

    @foreach($articles as $article)
    <tr>
    <td> {{ $article->id }} </td>
    <td> {{ $article->title }} </td>
    <td> {{ $article->body }} </td>
    <td> {{ $article->description }} </td>
    <td> {{ $article->category_id }} </td>
    <td> {{ $article->image_url }} </td>
    <td> {{ $article->author_id }} </td>
    <td> {{ $article->author }} </td>
    </tr>
    @endforeach


</table>






















@endsection
