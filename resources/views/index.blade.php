@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-3">
                    <div>{{ $project->project_name }} | {{ $project->project_dir }}</div>
                    <div><a href="{{ url('//' . $project->local_url) }}" target="_blank">本地url</a> <button type="button" class="btn btn-default" data-clipboard-text="{{ $project->local_url }}">复制</button></div>
                    <div><a href="{{ url('//' . $project->offline_url) }}" target="_blank">线下url</a> <button type="button" class="btn btn-default" data-clipboard-text="{{ $project->offline_url }}">复制</button></div>
                    <div><a href="{{ url('//' . $project->online_url) }}" target="_blank">线上url</a> <button type="button" class="btn btn-default" data-clipboard-text="{{ $project->online_url }}">复制</button></div>
                    <div><button type="button" class="btn btn-default" data-clipboard-text="{{ $project->password }}">复制密码</button></div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container remind remind-show">
    <div class="remind__container">
        <div class="remind__title">添加商业项目</div>
        <form>
            <div class="form-group">
                <label for="project_name">项目名称：</label>
                <input type="text" class="form-control" id="project_name">
            </div>
            <div class="form-group">
                <label for="project_dir">项目目录：</label>
                <input type="text" class="form-control" id="project_dir">
            </div>
            <div class="form-group">
                <label for="local_url">本地地址：</label>
                <input type="text" class="form-control" id="local_url" value="e.dxyq.net//user">
            </div>
            <div class="form-group">
                <label for="offline_url">线下地址：</label>
                <input type="text" class="form-control" id="offline_url" value="e.dxy.net//user">
            </div>
            <div class="form-group">
                <label for="online_url">线上地址：</label>
                <input type="text" class="form-control" id="online_url" value="e.dxy.cn//user">
            </div>
            <div class="form-group">
                <label for="password">项目密码：</label>
                <input type="text" class="form-control" id="password">
            </div>
        </form>
        <div class="remind__btnCon">
            <div class="remind__btn remind__btn--1"><a href="javascript:void(0)">取消</a></div>
            <div class="remind__btn remind__btn--2"><a href="javascript:void(0)">添加</a></div>
        </div>
    </div>
</div>
@endsection