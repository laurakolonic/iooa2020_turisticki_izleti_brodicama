<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Turistički izleti brodicama</title>

       

        <!-- Styles -->
        <style>
            
            html, body {
                background-color: #8f9dae;
                color: #636b6f;
                font-family: "Nunito", sans-serif;
              font-size: 0.9rem;
               font-weight: 400;
                line-height: 1.6;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                margin-top: -30px;
                
            }

            .content {
                text-align: center; 
                position: relative;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img {
            width: 100%;
            height: auto;
            }
            
        </style>
    </head>
    <body>
        
            
            <div class="content">
              
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        
                        <a style="font-weight:lighter;color:white; font-size:1vw;" href="{{ url('/logout') }}">Odjavi se</a>
                    @else
                        <a style="font-weight:lighter;color:white; font-size:1vw;"href="{{ route('login') }}">Prijavi se</a>

                        @if (Route::has('register'))
                            <a style="font-weight:lighter;color:white; font-size:1vw;"href="{{ route('register') }}">Registraj se</a>
                        @endif
                    @endauth
                    
                </div>
            @endif
                       <h1 style="font-weight:lighter; font-size:5vw;position: center;;color:white;">TURISTIČKI IZLETI</h1>     
              
            </div>
        </div>
    </body>
</html>
