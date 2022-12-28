@extends('layouts.master')
@push('Header')
     <h5>Dashboard</h5>
@endpush
@push('sub_Header')
     dashboard
@endpush
@section('content')
<div class="row">
     <div class="col-md-3">
          <div class="box-1 shadow bg-primary ">
               <div class="box-title row align-items-start text-white ">
                    <div class="col-sm-6">Book</div>
                    <div class="title-icon col-sm-6 text-right">
                         <i class="bi bi-book-half"></i>
                    </div>

               </div>
               <div class="box-body row align-items-end text-white">
                    <div class="box-body-total col-md-6">TOTAL</div>
                    <div class="col-sm-6 text-right">{{ $b_count }}</div>
               </div>
          </div>
     </div>
     <div class="col-md-3">
          <div class="box-1 shadow bg-success ">
               <div class="box-title row align-items-start text-white ">
                    <div class="col-sm-6">author</div>
                    <div class="title-icon col-sm-6 text-right">
                         <i class="bi bi-person-workspace"></i>
                    </div>

               </div>
               <div class="box-body row align-items-end text-white">
                    <div class="box-body-total col-md-6">TOTAL</div>
                    <div class="col-sm-6 text-right">{{ $auth_count }}</div>
               </div>
          </div>
     </div>
     <div class="col-md-3">
          <div class="box-1 shadow bg-info ">
               <div class="box-title row align-items-start text-white ">
                    <div class="col-sm-6">Category</div>
                    <div class="title-icon col-sm-6 text-right">
                         <i class="bi bi-border-style"></i>
                    </div>

               </div>
               <div class="box-body row align-items-end text-white">
                    <div class="box-body-total col-md-6">TOTAL</div>
                    <div class="col-sm-6 text-right">{{ $cate_count }}</div>
               </div>
          </div>
     </div>
     <div class="col-md-3">
          <div class="box-1 shadow bg-secondary ">
               <div class="box-title row align-items-start text-white ">
                    <div class="col-sm-6">Staff</div>
                    <div class="title-icon col-sm-6 text-right">
                         <i class="bi bi-people-fill"></i>
                    </div>

               </div>
               <div class="box-body row align-items-end text-white">
                    <div class="box-body-total col-md-6">TOTAL</div>
                    <div class="col-sm-6 text-right">2</div>
               </div>
          </div>
     </div>

</div>


<div>
     <div class="mt-3 mb-3">
          <div class="d-flex justify-content-between">
               <div>
                    <h5>BOOKS</h5>
          
               </div>
               <div class="part-search">
                    <form action="/home" method="get">
                         <div class="input-group">
                              <span class="input-group-text" id="search-box">Search</span>
                              <input type="search" id="search_box" name="search" class="form-control" placeholder="Search title, isbn, language" aria-label="Username" aria-describedby="basic-addon1">
                              <button type="submit" class="btn btn-info">Search</button>
                         </div>
                    </form>
               </div>
               <div class="part-filter">
                    <div class="" style="float: right;">
                         <div class="dropdown">
                              <button class="btn btn-md btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                      <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                                  </svg>
                                  Filter
                              </button>

                              <ul class="dropdown-menu">
                                   <li class="">
                                        <form method="get" action="/home" class="">
                                             <button class=" border-0 mb-2 w-6"><a href="/home?filter=asc" class="btn btn-info px-4 form-control text-white">Sort By Old</a></button>
                                             <button class=" border-0"><a href="/home?filter=desc" class="btn btn-info px-4 form-control">Sort By New</a></button>
                                        </form>
                                   </li>
                              </ul>
                          </div>
                          {{-- <form action="/home" method="get">
                             
                                   <select name="filter" id="" class="form-select">
                                        <option value="">Filter</option>
                                        <button>
                                             <option value="asc">By Old</option>
                                        </button>
                                   </select>
                         </form> --}}

                                   

                    </div>
               </div>
          </div>
     </div>
     <div class="book-view-list d-flex justify-content-between" id="search_data">
          @foreach ($book as $b)
               <div class="card mr-4" style="width: 10rem;">
                    <img src="/storage/books/cover/{{ $b->image_path }}" class="card-img-top" alt="Book Cover">
                    <div class="">
                         <div class="book-card-body">
                              <div class="book-view-body">
                                   <h5 class="card-title">{{ $b->book_title }}</h5>
                                   {{-- <p class="card-text">{{ $b->language }}</p> --}}
                              </div>
                         
                              <div class="book-action-footer">
                                   <a href="/books/{{ $b->id }}" class="btn btn-info btn-sm mr-5">View</a>
                                   {{-- <a href="/books/{{ $b->id }}/edit" class="btn btn-primary btn-sm ml-2">Edit</a> --}}
                              </div>
                         </div>
                    </div>
               </div>
          @endforeach
          
          
     </div>
     <div class="d-flex justify-content-center ">
          {{ $book->links('pagination::bootstrap-4') }}
     </div>
     <script>
          $(document).ready(function(){
               $("#search_box").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#search_data").filter(function() {
                         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
               });
          });
      </script>
</div>
@endsection
