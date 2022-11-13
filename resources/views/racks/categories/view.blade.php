@extends('layouts.master')
@section('title','View Employee')
@push('Header')
     View Category Detail
@endpush
@push('sub_Header')
     <a href="/categories">category</a> / view
@endpush
@section('content')
     
    <div class="container">
          <div class="card">
               <div class="card-header">

                         <div class="row">
                              <div class="col-md-6">
                                   <h3>Category Detail</h3>
                              </div>
                              <div class="col-md-6 d-flex justify-content-end" >
                                   <p class="text-muted">Created {{ $cate->created_at->format('d-M-Y') }} By {{ $cate->created_by }} | 
                                         Updated {{ $cate->updated_at->format('d-M-Y') }} By {{ $cate->updated_by }}</p>
                              </div>
                         </div>
               
               </div>
               <div class="card-body">
                    <div class="row">
                         {{-- <div class="col-4">
                              <div class="profile-img">
                                   <img class="rounded-circle" src="/storage/staffs/profile/{{ $sta->image_path }}" alt="">
                              </div>
                              <div>
                                   <table class="table table-striped">
                                        <tr>
                                             <th>ID</th>
                                             <td>{{ $emp->id }}</td>
                                        </tr>
                                   </table>
                              </div>
               
                         </div> --}}
                         <div class="col-12">
                              <div class="table-responsive">
                                   <table class="table table-striped table-hover">
                                        <tbody>
                                             <tr>
                                                  <th>ID</th>
                                                  <td class="code">{{ $cate->id }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Category</th>
                                                  <td class="code">{{ $cate->category_name }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Rack</th>
                                                  <td>{{ $cate->Rack->rack_name }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Description</th>
                                                  <td>{{ $cate->description }}</td>
                                             </tr>
                                            

                                        </tbody>
                                        
                                   </table>
                              </div>
                         </div>
                       </div>
               </div>
               <div class="card-footer">
                    <div class="d-flex justify-content-end">
                         <a href="/categories" class="btn btn-info mr-4">Back</a>
                         <a href="/categories/{{ $cate->id }}/edit" class="btn btn-primary">Go To Update</a>
                    </div>
               </div>
          </div>
        
    </div>
@endsection