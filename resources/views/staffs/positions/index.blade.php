@extends('layouts.master')
@section('title','Position')
@push('Header')
     Position
@endpush
@push('sub_Header')
     position / index
@endpush
@section('content')
     <div>
          <div class="">
               @if(Session::has('message'))
               <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{Session::get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               @endif
          </div>
          <div>
               @include('staffs.positions.create')
          </div>

          <div>
               <div class="table-responsive rounded-3">
                    <table class="table table-striped table-hover shadow mt-3">
                         <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Position name</th>
                                   <th>Description</th>
                                   <th>Actions</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($pos as $p)
                                   <tr>
                                        <td>{{$loop->iteration}} </td>
                                        <td>{{$p->position_name}}</td>
                                        <td>{{$p->description}}</td>
                                        <td class="text-right">
                                             <form action="/positions/{{$p ->id}}" method="post" class="d-flex justify-content-between">
                                                  @csrf
                                                  @method('DELETE')
                                                  <a href="javascript:void(0)" onclick="this.parentElement.submit();return confirm('Do want to delete this record?');" class="bi bi-trash text-danger"></a> |
                                                  <a href="/positions/{{$p ->id}}/edit"  class="bi bi-folder-plus"></a> |
                                                  {{-- data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="" --}}
                                                  <a href="/positions/{{$p ->id}}" class="bi bi-text-paragraph"></a>
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