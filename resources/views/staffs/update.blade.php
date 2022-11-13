@extends('layouts.master')
@section('title','Update Staff')
@push('Header')
     Update staff
@endpush
@push('sub_Header')
     staff / update
@endpush
@section('content')
     <div>
          <div class="modal-body">
               <form action="/staffs/{{ $sta->id }}" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    @method('put')
               <div class="row">
                    <!-- h -->
                    <div class="col-md-6">
                         <label for="name" class="form-label">First name</label>
                         <input type="text" name="first_name" value="{{ $sta->first_name }}" class="form-control flex-col" id="first_name" required placeholder="First name...">
                         @error('first_name')
                              <span class="text-danger">{{ $message }}</span>
                         @enderror
                         
                    </div>
                    <div class="col-md-6">
                         <label for="last_name" class="form-label">Last name</label>
                         <input type="text" name="last_name" value="{{ $sta->last_name }}" class="form-control flex-col" id="last_name" required placeholder="Last name...">
                         @error('last_name')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                         
                    </div>
              
               </div>
               <div class="row mt-2">
                    <!-- h -->
                    <div class="col-md-6">
                         <label for="dob" class="form-label">Date of Birth</label>
                         <input type="date" name="dob" value="{{ $sta->dob }}" class="form-control" id="dob" required placeholder="Date of birth...">
                         @error('dob')
                              <span class="text-danger">{{ $message }}</span>
                         @enderror
                         
                    </div>
                    <div class="col-md-6">
                         <label for="gender" class="form-label">Gender</label>
                         <select name="gender" id="gender" class="form-control">
                              <option value="{{ $sta->gender }}" style="display: none">{{ $sta->gender }}</option>
                              <option value="Male"  >Male</option>
                              <option value="Female">Female</option>
                              <option value="Others">Others</option>

                         </select>
                         @error('gender')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                         
                    </div>
              
               </div>
               <div class="row">
                    <div class="col-md-8">
                         <div class="row">
                              <div class="col-md-6 mt-2">
                                   <label for="phone" class="form-label">Phone</label>
                                   <input type="tel" name="phone" value="{{ $sta->phone }}" class="form-control flex-col" id="phone" required placeholder="Phone ...">
                                   @error('phone')
                                   <span class="text-danger">{{ $message }}</span>
                                        
                                   @enderror
                              </div>
                              <div class="col-md-6 mt-2">
                                   <label for="position_id" class="form-label">Position</label>
                                   <select name="position_id" id="position_id" class="form-select">
                                        <option value="{{ $sta->position_id }}" style="display: none">{{ $sta->Position->position_name }}</option>
                                        @foreach ($pos as $p)
                                             <option value="{{ $p->id }}">{{ $p->position_name }}</option>
                                        @endforeach
                                   </select>
                                   @error('position_id')
                                   <span class="text-danger">{{ $message }}</span>
                                        
                                   @enderror
                              </div>
                         </div>
                         
                         <div class="mt-2">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" name="email" value="{{ $sta->email }}" class="form-control flex-col" id="email" placeholder="Email ...">
                              @error('email')
                              <span class="text-danger">{{ $message }}</span>
                                   
                              @enderror
                         </div>
                         
                         <div class="mt-2">
                              <label for="salary" class="form-label">Salary</label>
                              <input type="text" value="{{ $sta->salary }}" name="salary" id="salary" class="form-control" placeholder="Salary ...">
                              @error('salary')
                              <span class="text-danger">{{ $message }}</span>
                                   
                              @enderror
                         </div>
                    </div>
                    <div class="col-md-4 mt-2">
                         <div>
                              <label for="" class="form-label">Staff's Photo</label>
                              <div class="d-flex justify-content-center">
                                   <img class=" justify-content-center" src="/storage/staffs/profile/{{ $sta->image_path }}"
                                        width="65%" height="155px" alt="profile" id="profile">
                              </div>
                           
                              
                              <input type="file" name="photo" accept="image/*" id="photo" class="form-control">
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-6 mt-2">
                         <label for="address" class="form-label">Address</label>
                         <input type="text" value="{{ $sta->address }}" name="address" id="address" class="form-control" placeholder="Address ...">
                         @error('address')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                    </div>
                    <div class="col-md-6 mt-2">
                         <label for="description" class="form-label">Description</label>
                         <input type="text" value="{{ $sta->description }}" name="description" id="description" class="form-control" placeholder="Description ...">
                         @error('description')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                    </div>
               </div>
               
               <div class="d-flex justify-content-end mt-3">
                    <a href="/staffs" class="btn btn-info mr-3">Back</a>
                    <button type="submit" class="btn btn-primary">Update Now</button>
               </div>
               </form>
          </div>
          <script>
               let profile= document.querySelector('input[type=file]');
               profile.addEventListener("change",function(e){
                    var img = document.querySelector('#profile');
                    img.setAttribute("src",window.URL.createObjectURL(e.target.files[0]));
                    img.setAttribute("style", "display.block;width:65%;height:155px;object-fit:fill;");
                    output.onload = function(){
                         URL.revokeObjectURL(output.src)
                    }
     
               });
          </script>
     </div>
@endsection