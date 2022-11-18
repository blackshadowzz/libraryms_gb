<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
     <title>Index</title>
</head>
<body >
     <div>
          <ul class="ul">
               <div>
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="#">About</a></li>
               </div>
              <div class="right">
               <li>

                    @guest
                         @if (Route::has('login'))
                              <li class="nav-item">
                                   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                         @endif

                         @if (Route::has('register'))
                                   <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                   </li>
                         @endif
                         @else
                              <li>
                                   <a href="/home">Home</a>
                              </li>  
                    @endguest
               </li>
              </div>
              
            </ul>
      </div>
     <div class="main">
          <div class="main-img">
              <div class="content-area">
                  <div class="content">
                      <h1>Library Management System</h1>
                      <p>Library management system is syetem manage books in library and more. </p>
                      <button class="button"><a href="/home">Click Me</a></button>
                  </div>
              </div>
          </div>
      </div>
</body>
</html>