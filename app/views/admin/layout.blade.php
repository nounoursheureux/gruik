<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="UTF-8">
        <title>Gruiiiiik.</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/vendor/select2/select2.css" rel="stylesheet" type="text/css" />
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="/vendor/highlightjs/styles/github.css" rel="stylesheet" type="text/css" />
        <link href="/vendor/selectize/dist/css/selectize.css" rel="stylesheet" type="text/css" />
        <link href="/vendor/selectize/dist/css/selectize.default.css" rel="stylesheet" type="text/css" />

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

        <style>
            .selectize-input { box-shadow: none !important; border-radius: 0; border-left:0;border-right:0;border-top:0; border-bottom:1px dotted;}
        </style>
    </head>

    <body class="skin-black" @yield('controller')>

        <header class="header">
            @include('admin.partials.navbar')
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                @include('admin.partials.sidebar')
            </aside>

            <aside class="right-side">
                <section class="content">
                    @yield('content')
                </section>
            </aside>
        </div>

        <!-- View where JS vals are bind from server -->
        @include('jsassets')

        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/selectize/dist/js/standalone/selectize.min.js" type="text/javascript"></script>
        <script src="/vendor/select2/select2.min.js"></script>
        <script src="/vendor/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/vendor/angular/angular.min.js" type="text/javascript"></script>
        <script src="/vendor/angular-ui-select2/src/select2.js" type="text/javascript"></script>
        <script src="/vendor/lodash/dist/lodash.min.js" type="text/javascript"></script>
        <script src="/js/AdminLTE/app.js" type="text/javascript"></script>
        <script src="/js/angular/admin.js" type="text/javascript"></script>

    </body>
</html>