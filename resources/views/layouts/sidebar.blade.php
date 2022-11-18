<aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="/" class="brand-link">
       <img src="/assets/images/logo1.webp" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
       <span class="brand-text font-weight-light">Library System</span>
     </a>
     <!-- Sidebar -->
     <div class="sidebar">
       <!-- Sidebar user panel (optional) -->
       {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
           <img src="/assets/images/admin.jpg" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
           <a href="" class="d-block">{{ Auth::user()->name }}</a>
         </div>
       </div> --}}
 
       <!-- Sidebar Menu -->
       <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
           <li class="nav-item">
             <a href="/home" class="nav-link">
               <i class="nav-icon bi bi-grid-1x2-fill"></i>
               <p class="">
                 Dashboard
                 <i class=""></i>
               </p>
             </a>
 
           </li>
           <li class="nav-item">
             <a href="/books" class="nav-link">
               <i class="nav-icon bi bi-book-half"></i>
               <p class="">
                 Book
                 <i class=""></i>
               </p>
             </a>
 
           </li>
           <li class="nav-item">
             <a href="/authors" class="nav-link">
               <i class="nav-icon bi bi-person-workspace"></i>
               <p>
                 Author
                 <span class="right badge badge-danger"></span>
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="/staffs" class="nav-link">
               <i class="nav-icon bi bi-people-fill"></i>
               <p>
                 Staff
                 <i class="right bi bi-caret-down"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/staffs" class="nav-link">
                  <i class="bi bi-journal-text ml-2"></i>
                  <p class="ml-3">Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/positions" class="nav-link">
                  <i class="bi bi-journal-text ml-2"></i>
                  <p class="ml-3">Position</p>
                </a>
              </li>
            </ul>
           </li>
           <li class="nav-item">
            <a href="/categories" class="nav-link">
              <i class="nav-icon bi bi-border-style"></i>
              <p>
                Category
                <i class="right bi bi-caret-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/categories" class="nav-link">
                  <i class="bi bi-border-style ml-2"></i>
                  <p class="ml-3">Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/racks" class="nav-link">
                  <i class="bi bi-align-start ml-2"></i>
                  <p class="ml-3">Rack</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/suppliers" class="nav-link">
              <i class="nav-icon bi bi-cart-plus"></i>
              <p>
                Supplier
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
         </ul>
       </nav>
       <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
</aside>