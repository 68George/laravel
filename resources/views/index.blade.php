<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商业项目</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('clipboard/dist/clipboard.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/index.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('sweetalert2/dist/sweetalert2.js') }}" defer></script>
</head>
<body class="body index"></body>
    <div class="nav"></div>
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
</html>