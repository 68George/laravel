<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商业项目</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('jquery/dist/jquery.js') }}" defer></script>
</head>
<body class="body admin"></body>
<div class="nav"></div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" style="padding-bottom: 10px;">全选
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div></div>
            </div>
            <div class="col-md-2">
                <a href="{{ url('admin/add') }}">添加</a>
            </div>
            <div class="col-md-2">
                <a href="javascript:void(0)">删除</a>
            </div>
            @foreach($projects as $project)
                <div class="col-md-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>{{ $project->project_name }} | {{ $project->project_dir }}</div><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </div>
                <div class="col-md-2">
                    <a href="">编辑</a>
                </div>
                <div class="col-md-2">
                    <a href="javascript:void(0)">删除</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
    <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
</html>