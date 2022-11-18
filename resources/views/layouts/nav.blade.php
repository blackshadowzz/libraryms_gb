<nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
       <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" style="font-size: 20px;color:black;font-weight:800" href="#" role="button"><i class="bi bi-list"></i></a>
       </li>
     </ul>
 
     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
       <!-- Navbar Search -->
       <li class="nav-item">
         <a class="nav-link" data-widget="navbar-search" href="/" role="button">
           <i class="bi bi-search"></i>
         </a>
         <div class="navbar-search-block">
           <form class="form-inline">
             <div class="input-group input-group-sm">
               <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
               <div class="input-group-append">
                 <button class="btn btn-navbar" type="submit">
                   <i class="bi bi-search"></i>
                 </button>
                 <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                   <i class="bi bi-x"></i>
                 </button>
               </div>
             </div>
           </form>
         </div>
       </li>
 
 
   
       <li class="nav-item">
         <a class="nav-link" data-widget="fullscreen" href="#" role="button">
           <i class="bi bi-arrows-fullscreen"></i>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
           <i class="bi bi-file-earmark-plus"></i>
         </a>
       </li>
       <ul class="navbar-nav ms-auto">
         <!-- Authentication Links -->
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
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img
                      src="assets/images/admin.jpg"
                      class="rounded-circle"
                      height="25"
                      alt=""
                      loading="lazy"
                    />
    
                 </a>
 
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/users/index">
                    User Setting
                  </a>
                  <hr class="dropdown-divider " />

                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                     
 
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                </div>
             </li>
         @endguest
     </ul>
     </ul>
</nav>