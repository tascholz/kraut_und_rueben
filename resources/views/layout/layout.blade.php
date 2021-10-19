<!-- Navigation Menu -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div id="app">
    <v-app>
        <navigation-drawer />
        @yield('content')
    </v-app>
</div>
<div>
</div>

<script src="{{asset('js/app.js')}}"></script>
