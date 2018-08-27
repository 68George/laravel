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
@endsection