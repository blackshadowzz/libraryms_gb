@extends('layouts.master')
@push('Header')
     <h5>Dashboard</h5>
@endpush
@push('sub_Header')
     dashboard
@endpush
@section('content')
     <div class="row g-2 justify-content-between">
          <div class="col-3 ">
               <div class="row rounded-3 bg-info text-white p-3 justify-content-between">
                    <div class="col-6">
                         EMPLOYEE
                    </div>
                    <div class="col-6 align-items-end">
                         120,334
                    </div>
               </div>
          </div>
          <div class="col-3 bg-blue text-white">
               <div class="row">
                    <div class="col-6">
                         EMPLOYEE
                    </div>
                    <div class="col-6">
                         120,334
                    </div>
               </div>
          </div>
          <div class="col-3 bg-success text-white">
               <div class="row">
                    <div class="col-6">
                         EMPLOYEE
                    </div>
                    <div class="col-6">
                         120,334
                    </div>
               </div>
          </div>
     </div>
@endsection
