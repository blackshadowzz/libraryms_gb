@extends('layouts.master')
@section('title','Rack')
@push('Header')
     Rack
@endpush
@push('sub_Header')
     rack / index
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

               @include('racks.create')

          </div>

          <div class="table-responsive">
               <table class="table table-striped table-hover shadow mt-3">
                    <thead>
                         <tr>
                              <th>No</th>
                              <th>Rack</th>
                              <th>Description</th>
                              <th style="width: 15%">Created Date</th>
                              <th style="width: 15%">Created By</th>
                              <th style="width: 10%">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($rack as $r)
                              <tr>
                                   <td>{{ $r->id }}</td>
                                   <td>{{ $r->rack_name }}</td>
                                   <td>{{ $r->description }}</td>
                                   <td>{{ $r->created_at->format('d-M-Y') }}</td>
                                   <td>{{ $r->created_by }}</td>
                                   <td>
                                        <form action="/racks/{{$r ->id}}" method="post" class="d-flex justify-content-between">
                                             @csrf
                                             @method('DELETE')
                                             <a href="javascript:void(0)" onclick="this.parentElement.submit();return confirm('Do want to delete this record?');" class="bi bi-trash text-danger"></a> |
                                             <a href="/racks/{{$r ->id}}/edit"  class="bi bi-folder-plus"></a> |
                                             {{-- data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="" --}}
                                             <a href="/racks/{{$r ->id}}" class="bi bi-text-paragraph">
                                             </a>
                                             
                                        </form>
                                   </td>
                              </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
     </div>
@endsection