@extends('layouts.master')
@section('title','Update Supplier')
@push('Header')
     Update supplier
@endpush
@push('sub_Header')
    <a href="/suppliers">supplier</a> / update 
@endpush
@section('content')
     <div>
          <div class="modal-body">
               <form action="/suppliers/{{ $sup->id }}" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                         <div class="col-md-6">
                              <!-- h -->
                              <div class="">
                                   <label for="supplier_name" class="form-label">Supplier Name</label>
                                   <input type="text" name="supplier_name" value="{{ $sup->supplier_name }}" class="form-control flex-col" id="supplier_name" required placeholder="Supplier name...">
                                   @error('supplier_name')
                                   <span class="text-danger">{{ $message }}</span>
                                        
                                   @enderror
                                   
                              </div>
                         </div>
                         <div class="col-md-6">
                              <label for="company_name" class="form-label">Company Name</label>
                              <input type="text" name="company_name" id="company_name" class="form-control" value="{{ $sup->company_name }}"
                                   required placeholder="Company name ...">
                              @error('company_name')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div> 
                    </div>
                
                    <div class="row mt-2">
                         <div class="col-md-6 ">
                              <label for="contact" class="form-label">Contact No.</label>
                              <input type="text" name="contact" id="contact" class="form-control" value="{{ $sup->contact }}"
                                   required placeholder="Contact name ...">
                              @error('contact')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="col-md-6">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" name="email" id="email" class="form-control" value="{{ $sup->email }}"
                                   required placeholder="Email ...">
                              @error('email')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div> 
                    </div>
                     
                   
                    <div class=" mt-2">
                         <label for="address" class="form-label">Address</label>
                         <input type="text" name="address" id="address" class="form-control" value="{{ $sup->address }}"
                              required placeholder="Address ...">
                         @error('address')
                              <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div> 
                    <div class=" mt-2">
                         <label for="description" class="form-label">Description</label>
                         <input type="text" name="description" id="description" value="{{ $sup->description }}" class="form-control" placeholder="description">
                         @error('description')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                    </div> 
                    <div>
                         <input type="hidden" name="updated_by" value="{{ Auth::user()->name }}" id="updated_by">
                    </div>  

               <div class="d-flex justify-content-start mt-3">
                   
                    <button type="submit" class="btn btn-primary ">Update Now</button>
                    <a href="/suppliers" class="btn btn-info ml-3">Back</a>
               </div>
                    
                    
               </form>
          </div>
     </div>
@endsection