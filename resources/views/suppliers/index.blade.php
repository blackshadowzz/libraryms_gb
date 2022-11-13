@extends('layouts.master')
@section('title','Supplier')
@push('Header')
     Supplier
@endpush
@push('sub_Header')
     <a href="/suppliers">supplier</a> / index
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
               @if(Session::has('message_danger'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         {{Session::get('message_danger')}}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
               @endif
          </div>
          <div>
               @include('suppliers.create')
          </div>
          <div>
               <div class="table-responsive">
                    <table class="table table-hover shadow mt-3">
                         <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Supplier name</th>
                                   <th>Company</th>
                                   <th>Phone</th>
                                   <th>Email</th>
                                   <th>Address</th>
                                   <th style="width: 10%;">Actions</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($sup as $s)
                                   <tr>
                                        <td>{{ $s->id }}</td>
                                        <td>{{ $s->supplier_name }}</td>
                                        <td>{{ $s->company_name }}</td>
                                        <td>{{ $s->contact }}</td>
                                        <td>{{ $s->email }}</td>
                                        <td>{{ $s->address }}</td>
                                        <td>
                                             <form action="/suppliers/{{$s ->id}}" method="post" class="d-flex justify-content-between">
                                                  @csrf
                                                  @method('DELETE')
                                                  <a href="javascript:void(0)" onclick="this.parentElement.submit();return confirm('Do want to delete this record?');" class="bi bi-trash text-danger"></a> |
                                                  <a href="/suppliers/{{$s ->id}}/edit"  class="bi bi-folder-plus"></a> |
                                                  {{-- data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="" --}}
                                                  <a href="/suppliers/{{$s ->id}}" class="bi bi-text-paragraph">
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