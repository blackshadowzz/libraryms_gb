<div class="modal fade" id="exampleModal" tabindex="-1"  aria-hidden="true">
     <div class="modal-dialog modal-xl" style="width: 55%">
          <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Create Staff</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <form action="/staffs" method="post" class="" enctype="multipart/form-data">
                         @csrf
                    <div class="row">
                         <!-- h -->
                         <div class="col-md-6">
                              <label for="name" class="form-label">First name</label>
                              <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control flex-col" id="first_name" required placeholder="First name...">
                              @error('first_name')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                              
                         </div>
                         <div class="col-md-6">
                              <label for="last_name" class="form-label">Last name</label>
                              <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control flex-col" id="last_name" required placeholder="Last name...">
                              @error('last_name')
                              <span class="text-danger">{{ $message }}</span>
                                   
                              @enderror
                              
                         </div>
                   
                    </div>
                    <div class="row mt-2">
                         <!-- h -->
                         <div class="col-md-6">
                              <label for="dob" class="form-label">Date of Birth</label>
                              <input type="date" name="dob" value="{{ old('dob') }}" class="form-control" id="dob" required placeholder="Date of birth...">
                              @error('dob')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                              
                         </div>
                         <div class="col-md-6">
                              <label for="gender" class="form-label">Gender</label>
                              <select name="gender" id="gender" class="form-control">
                                   <option value="" style="display: none">Choose gender</option>
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
                                        <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control flex-col" id="phone" required placeholder="Phone ...">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                             
                                        @enderror
                                   </div>
                                   <div class="col-md-6 mt-2">
                                        <label for="position_id" class="form-label">Position</label>
                                        <select name="position_id" id="position_id" class="form-select">
                                             <option value="" style="display: none">Choose position</option>
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
                                   <input type="email" name="email" value="{{ old('email') }}" class="form-control flex-col" id="email" required placeholder="Email ...">
                                   @error('email')
                                   <span class="text-danger">{{ $message }}</span>
                                        
                                   @enderror
                              </div>
                              
                              <div class="mt-2">
                                   <label for="salary" class="form-label">Salary</label>
                                   <input type="text" value="{{ old('salary') }}" name="salary" id="salary" class="form-control" placeholder="Salary ...">
                                   @error('salary')
                                   <span class="text-danger">{{ $message }}</span>
                                        
                                   @enderror
                              </div>
                         </div>
                         <div class="col-md-4 mt-2">
                              <div>
                                   <label for="" class="form-label">Staff's Photo</label>
                                   <div class="d-flex justify-content-center">
                                        <img src="" alt="profile" id="profile">
                                   </div>
                                
                                   <input type="file" name="photo" accept="image/*" class="form-control">
                              </div>
                         </div>
                    </div>
                    <div class="mt-2">
                         <label for="address" class="form-label">Address</label>
                         <input type="text" value="{{ old('address') }}" name="address" id="address" class="form-control" placeholder="Address ...">
                         @error('address')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                    </div>
                    <div class="mt-2">
                         <label for="description" class="form-label">Description</label>
                         <input type="text" value="{{ old('description') }}" name="description" id="description" class="form-control" placeholder="Description ...">
                         @error('description')
                         <span class="text-danger">{{ $message }}</span>
                              
                         @enderror
                    </div>
                    <div class="mt-2">
                         <button type="submit" style="float: right" class="btn btn-info mt-3 form-control">Add New</button>
                    </div>
                    </form>
               </div>
          </div>
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