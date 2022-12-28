@extends('layouts.master')
@section('title','Author')
@push('Header')
     <h5>Author</h5>
@endpush
@push('sub_Header')
     author
@endpush
@section('content')
     <div>
          <div>
               @if(Session::has('message'))
               <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{Session::get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               @endif
          </div>
          <div class="d-flex justify-content-between">
               <div>
                    <button type="button" style="float: left;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Add New</button>
                    @include('authors.create')
               </div>
               <div class="part-search">
                    <form action="/employees" method="get">
                         <div class="input-group">
                              <span class="input-group-text" id="search-box">Search</span>
                              <input type="search" name="search" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="basic-addon1">
                              <button type="submit" class="btn btn-info">Search</button>
                         </div>
                    </form>
                 </div>
                 <div class="">
                    <a href="" class="btn btn-primary">Print</a>
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
                                   <li class=""></li>
                              </ul>
                          </div>
                    </div>
                 </div>
          </div>
          <div>
               <table class="table table-striped table-hover shadow mt-2">
                    <thead class="table-dark">
                         <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Fullname</th>
                              <th scope="col">Contact</th>
                              <th scope="col">Description</th>
                              <th scope="col">Created Date</th>
                              <th scope="col" style="width:10%">Actions</th>
                         </tr>
                    </thead>

                         @foreach($data as $auth)
                         <tr>
                                  <td>{{ $auth->id }}</td>
                                  <td>{{ $auth->fullname }}</td>
                                  <td>{{ $auth->contact }}</td>
                                  <td>{{ $auth->description }}</td>
                                  <td>{{ $auth->created_at }}</td>
                                  <td>
                                        <form action="/authors/{{$auth->id}}" method="post" class="d-flex justify-content-around">
                                             @csrf
                                             @method('DELETE')
                                             <a href="javascript:void(0)" onclick="this.parentElement.submit();return confirm('Do want to delete this record?');" class="bi bi-trash text-danger"></a> |
                                             <a href="/authors/{{$auth->id}}/edit"  class="bi bi-pen"></a> |
                                             {{-- data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="" --}}
                                             <a href="/authors/{{$auth->id}}" class=""><i class="bi bi-eye"></i></a>
                                        </form>
                                  </td>
                         </tr>
                         @endforeach

               </table>
               <div class="d-flex justify-content-center">
                    {!! $data->links('pagination::bootstrap-4') !!}
               </div>
          </div>
     </div>
@endsection