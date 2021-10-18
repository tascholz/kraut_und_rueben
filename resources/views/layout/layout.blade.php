<!-- Navigation Menu -->
<div id="app">
    <v-app>
        <navigation-drawer></navigation-drawer>
        
    </v-app>
</div>
<div>
    @yield('content')
</div>

<script src="{{asset('js/app.js')}}"></script>
