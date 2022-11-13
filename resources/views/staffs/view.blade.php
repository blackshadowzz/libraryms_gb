@extends('layouts.master')
@section('title','View Employee')
@push('Header')
     View Staff Detail
@endpush
@push('sub_Header')
     staff / view
@endpush
@section('content')
     
    <div class="container">
          <div class="card">
               <div class="card-header">

                         <div class="row">
                              <div class="col-md-8">
                                   <h3>Hello {{ $sta->first_name }} {{ $sta->last_name }}</h3>
                              </div>
                              <div class="col-md-4 d-flex justify-content-end" >
                                   <p class="text-muted">Created {{ $sta->created_at->format('d-M-Y') }} Updated {{ $sta->updated_at->format('d-M-Y') }}</p>
                              </div>
                         </div>
               
               </div>
               <div class="card-body">
                    <div class="row">
                         <div class="col-4">
                              <div class="profile-img">
                                   <img class="rounded-circle" src="/storage/staffs/profile/{{ $sta->image_path }}" alt="">
                              </div>
                              <div>
                                   {{-- <table class="table table-striped">
                                        <tr>
                                             <th>ID</th>
                                             <td>{{ $emp->id }}</td>
                                        </tr>
                                   </table> --}}
                              </div>
               
                         </div>
                         <div class="col-8">
                              <div class="table-responsive">
                                   <table class="table table-striped table-hover">
                                        <tbody>
                                             <tr>
                                                  <th>ID</th>
                                                  <td class="code">{{ $sta->id }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Fullname</th>
                                                  <td class="code">{{ $sta->first_name }} {{ $sta->last_name }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Position</th>
                                                  <td>{{ $sta->Position->position_name }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Date of Birth</th>
                                                  <td>{{ $sta->dob }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Gender</th>
                                                  <td>{{ $sta->gender }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Address</th>
                                                  <td>{{ $sta->address }}</td>
                                             </tr>
                                             {{-- <tr>
                                                  <th>Province</th>
                                                  <td>{{ $emp->province }}</td>
                                             </tr> --}}
                                             <tr>
                                                  <th>Phone</th>
                                                  <td>{{ $sta->phone }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Email</th>
                                                  <td>{{ $sta->email }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Salary</th>
                                                  <td>{{ __('$') }} {{ number_format($sta->salary,2) }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Description</th>
                                                  <td>{{ $sta->description }}</td>
                                             </tr>

                                        </tbody>
                                        
                                   </table>
                              </div>
                         </div>
                       </div>
               </div>
               <div class="card-footer">
                    <div class="d-flex justify-content-end">
                         <a href="/staffs" class="btn btn-info mr-4">Back</a>
                         <a href="/staffs/{{ $sta->id }}/edit" class="btn btn-primary">Go To Update</a>
                    </div>
               </div>
          </div>
        
    </div>
@endsection