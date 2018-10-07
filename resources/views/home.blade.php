@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">后台控制面板</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    后台控制面板
                    

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
