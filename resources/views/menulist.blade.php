@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">目录管理</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    这里是目录管理页面
                    

                    <div class="container">
                        <div class="col-sm-offset-2 col-sm-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    新的目录
                                </div>

                                <div class="panel-body">
                                    <!-- Display Validation Errors -->
                                    @include('common.errors')

                                    <!-- New Task Form -->
                                    <form action="{{ url('home/menuadd')}}" method="POST" class="form-horizontal">
                                        {{ csrf_field() }}

                                        <!-- Task Name -->
                                        <div class="form-group">
                                            <label for="task-name" class="col-sm-3 control-label">目录</label>

                                            name:
                                            <div class="col-sm-6">
                                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('menus') }}">
                                            </div>
                                            description:
                                            <div class="col-sm-6">
                                                <input type="text" name="description" id="task-name" class="form-control" value="{{ old('menus') }}">
                                            </div>
                                        </div>

                                        <!-- Add Task Button -->
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fa fa-btn fa-plus"></i>点击添加目录
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Current Tasks -->
                            @if (count($menus) > 0)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Current Tasks
                                    </div>

                                    <div class="panel-body">
                                        <table class="table table-striped task-table">
                                            <thead>
                                                <th>Task</th>
                                                <th>description</th>
                                                <th>&nbsp;</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($menus as $menu)
                                                    <tr>
                                                        <td class="table-text"><div>{{ $menu->name }}</div></td>
                                                        <td class="table-text"><div>{{ $menu->description }}</div></td>

                                                        <!-- Task Delete Button -->
                                                        <td>
                                                            <form action="{{ url('home/menudelete/'.$menu->id) }}" method="POST">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}

                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>




                    <form class="form-horizontal" method="POST" action="/home/addmenu">
                      <fieldset>
                        <div id="legend" class="">
                          <legend class="">添加目录（最多五个）</legend>
                        </div>
                      <div class="control-group">

                            <!-- Text input-->
                            <label class="control-label" for="input01" name="menu" value="菜单">请输入表单</label>
                            <div class="controls">
                              <input type="text" placeholder="请输入目录名" class="input-xlarge">
                              <p class="help-block">输入</p>
                              <input type="submit">
                            </div>
                          </div>

                      </fieldset>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
