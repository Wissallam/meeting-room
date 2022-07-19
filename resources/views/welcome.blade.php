<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Meeting-room</title>

   
         <style>
            html {
                background: url("https://t4.ftcdn.net/jpg/03/14/67/49/360_F_314674980_2DDfLr6oEWQkcgWLyh9MBjzZBrRl7G00.jpg") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
    
            div.link h3 {
                font-size: large;
            }
    
            div.link p {
                font-size: small;
                color: #718096;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div style="text-align: center;">
             

                
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Button</button>
                    
                  </div>
             </div>


             <h1 style="font-size:8vw">Welcome to Meeting-room</h1>
              
    </body>
</html>
