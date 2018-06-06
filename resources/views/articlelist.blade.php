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
    <th>修改</th>
    <th>删除</th>
    <th>
        <a href=" {{ url('/home/addarticle') }} ">添加文章</a>
    </th>
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
    <td> <a href=" {{ url('/home/articleedit') }}/{{ $article->id }} ">编辑</a> </td>
    <td> 
        <form action="{{ url('/home/delarticle/'.$article->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-btn fa-trash"></i>删除
            </button>
        </form>

     </td>
    </tr>
    @endforeach


</table>
{!! $articles->links() !!}






















@endsection
