@extends('layouts.master')
@section('title','Update Rack')
@push('Header')
     Update Rack
@endpush
@push('sub_Header')
     rack / update
@endpush
@section('content')
     <div>
          <div class="modal-body">
               <form action="/racks/{{ $rack->id }}" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                         <div class="">
                              <!-- h -->
                              <div class="">
                                   <label for="rack_name" class="form-label">Rack Name</label>
                                   <input type="text" name="rack_name" value="{{ $rack->rack_name }}" class="form-control flex-col" id="rack_name" required placeholder="Rack name...">
                                   @error('rack_name')
                                   <span class="text-danger">{{ $message }}</span>
                                        
                                   @enderror
                                   
                              </div>
                         </div>
                    </div>
                
                    <div class=" mt-2">
                         <label for="description" class="form-label">Description</label>
                         <input type="text" name="description" id="description" value="{{ $rack->description }}" class="form-control" placeholder="description">
                         @error('description')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                    </div> 
                    <div>
                         <input type="hidden" name="created_by" value="{{ $rack->created_by }}" id="created_by">
                    </div>  
                    <div>
                         <input type="hidden" name="updated_by" value="{{ Auth::user()->name }}" id="created_by">
                    </div>  

               <div class="modal-footer d-flex justify-content-end mt-2">
                    <a href="/racks" class="btn btn-info mr-3">Back</a>
                    <button type="submit" style="float: right" class="btn btn-primary ">Update Now</button>
               </div>
                    
                    
               </form>
          </div>
     </div>
@endsection