@extends('layouts.master')
@section('title','Category')
@push('Header')
     Category
@endpush
@push('sub_Header')
     <a href="/categories">category</a> / index
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
          <div>
               @include('racks.categories.create')
          </div>

          <div>
               <div class="table-responsive">
                    <table class="table table-hover shadow mt-3">
                         <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Category</th>
                                   <th>Rack</th>
                                   <th>Description</th>
                                   <th>Created By</th>
                                   <th style="width: 10%;">Actions</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($cate as $c)
                                   <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->category_name }}</td>
                                        <td>{{ $c->Rack->rack_name }}</td>
                                        <td>{{ $c->description }}</td>
                                        <td>{{ $c->created_by }}</td>
                                        <td>
                                             <form action="/categories/{{$c ->id}}" method="post" class="d-flex justify-content-between">
                                                  @csrf
                                                  @method('DELETE')
                                                  <a href="javascript:void(0)" onclick="this.parentElement.submit();return confirm('Do want to delete this record?');" class="bi bi-trash text-danger"></a> |
                                                  <a href="/categories/{{$c ->id}}/edit"  class="bi bi-folder-plus"></a> |
                                                  {{-- data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="" --}}
                                                  <a href="/categories/{{$c ->id}}" class="bi bi-text-paragraph">
                                                  </a>
                                                  
                                             </form>
                                        </td>
                                   </tr>
                              @endforeach
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
@endsection