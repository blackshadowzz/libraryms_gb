@extends('layouts.master')
@push('Header')
     <h5>Update Author</h5>
@endpush
@push('sub_Header')
     author
@endpush
@section('title','Update Author')
@section('content')
<div class="modal-body">
     <form action="/authors/{{ $data->id }}" method="post" class="">
          @csrf
          @method('put')
     <div class="row">
          <!-- h -->
          <div class="">
               <label for="fullname" class="form-label">Author Name</label>
               <input type="text" value="{{ $data->fullname }}" name="fullname" class="form-control flex-col" id="fullname" required placeholder="Author...">
               @error('name')
               <span class="text-danger">{{ $message }}</span>
                    
               @enderror
               
          </div>
          <div class="mt-3">
               <label for="contact" class="form-label">Contact No.</label>
               <input type="tel" value="{{ $data->contact }}" name="contact" class="form-control flex-col" id="contact" required placeholder="Contact...">
               @error('contact')
               <span class="text-danger">{{ $message }}</span>
                    
               @enderror
               
          </div>
          <div class="mt-3">
               <label for="description" class="form-label">Desciption</label>
               <input type="text" value="{{ $data->description }}" name="description" class="form-control flex-col" id="description" required placeholder="Description...">
               @error('description')
               <span class="text-danger">{{ $message }}</span>
                    
               @enderror
               
          </div>
    
     </div>

     <div class="d-flex mt-2 justify-content-end g-2">
          <a href="/authors" class="btn btn-info mr-3">Cancel</a>
          <button type="submit" class="btn btn-primary">Update Now</button>
     </div>
         
          
     </form>
</div>
@endsection