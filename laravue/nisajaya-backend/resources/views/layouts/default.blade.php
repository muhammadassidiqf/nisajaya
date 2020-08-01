<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShaynaAdmin - HTML5 Admin Template</title>
    <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- style --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body>
    <!-- Left Panel -->
    @include('includes.sidebar')
    <div id="right-panel" class="right-panel">
        <!-- navbar-->
        @include('includes.navbar')
        <div class="content">
            {{-- content  --}}
            @yield('content')
        </div>
        <div class="clearfix"></div>
    </div>

    {{-- script --}}
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>
