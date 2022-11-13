@extends('layouts.master')
@section('title','Update Category')
@push('Header')
     Update category
@endpush
@push('sub_Header')
     <a href="/categories">category</a> / update
@endpush
@section('content')
     <div>
          <div class="modal-body">
               <form action="/categories/{{ $cate->id }}" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                         <div class="">
                              <!-- h -->
                              <div class="">
                                   <label for="category_name" class="form-label">Category Name</label>
                                   <input type="text" name="category_name" value="{{ $cate->category_name }}" class="form-control flex-col" id="category_name" required placeholder="Category name...">
                                   @error('category_name')
                                   <span class="text-danger">{{ $message }}</span>
                                        
                                   @enderror
                                   
                              </div>
                         </div>
                    </div>
                
                    <div class=" mt-2">
                         <label for="rack_id" class="form-label">Rack</label>
                         <select name="rack_id" id="rack_id" class="form-select">
                              <option value="{{ $cate->rack_id }}" style="display: none">{{ $cate->Rack->rack_name }}</option>
                              @foreach ($rack as $r)
                                   <option value="{{ $r->id }}">{{ $r->rack_name }}</option>
                              @endforeach
                         </select>
                         @error('rack_id')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                    </div> 
                    <div class=" mt-2">
                         <label for="description" class="form-label">Description</label>
                         <input type="text" name="description" id="description" value="{{ $cate->description }}" class="form-control" placeholder="description">
                         @error('description')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                    </div> 
                    <div>
                         <input type="hidden" name="created_by" value="{{ $cate->created_by }}" id="created_by">
                    </div>  
                    <div>
                         <input type="hidden" name="updated_by" value="{{ Auth::user()->name }}" id="updated_by">
                    </div>  

               <div class="modal-footer d-flex justify-content-end mt-2">
                    <a href="/categories" class="btn btn-info mr-3">Back</a>
                    <button type="submit" style="float: right" class="btn btn-primary ">Update Now</button>
               </div>
                    
                    
               </form>
          </div>
     </div>
@endsection