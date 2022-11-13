<div class="d-flex justify-content-between">
     <div class="part-create">
        <button type="button" class="btn btn-primary form-control" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Add New</button>

     </div>
     <div class="part-search">
        <form action="/suppliers" method="get">
             <div class="input-group">
                  <span class="input-group-text" id="search-box">Search</span>
                  <input type="search" name="search" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="basic-addon1">
                  <button type="submit" class="btn btn-info">Search</button>
             </div>
        </form>
     </div>
     <div class="part-filter">
        <div class="" style="float: right;">
          <div>
               <a href="" class="btn btn-info">PRINT</a>
          </div>
             {{-- <div class="dropdown">
                  <button class="btn btn-md btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                          <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                      </svg>
                      Filter
                  </button>
                  <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="">IT</a></li>
                  <li><a class="dropdown-item" href="">Marketing</a></li>
   
                  </ul>
              </div> --}}
        </div>
     </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1"  aria-hidden="true">
     <div class="modal-dialog modal-xl" style="width: 45%">
          <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <form action="/suppliers" method="post" class="" enctype="multipart/form-data">
                         @csrf
                         <div class="row">
                              <div class="">
                                   <!-- h -->
                                   <div class="">
                                        <label for="supplier_name" class="form-label">Supplier Name</label>
                                        <input type="text" name="supplier_name" value="{{ old('supplier_name') }}" class="form-control flex-col" id="supplier_name" required placeholder="Supplier name...">
                                        @error('supplier_name')
                                        <span class="text-danger">{{ $message }}</span>
                                             
                                        @enderror
                                        
                                   </div>
                              </div>
                         </div>
                     
                         <div class=" mt-2">
                              <label for="company_name" class="form-label">Company Name</label>
                              <input type="text" name="company_name" id="company_name" class="form-control" value="{{ old('company_name') }}"
                                   required placeholder="Company name ...">
                              @error('company_name')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div> 
                         <div class=" mt-2">
                              <label for="contact" class="form-label">Contact No.</label>
                              <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact') }}"
                                   required placeholder="Contact name ...">
                              @error('contact')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div> 
                         <div class=" mt-2">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"
                                   required placeholder="Email ...">
                              @error('email')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div> 
                         <div class=" mt-2">
                              <label for="address" class="form-label">Address</label>
                              <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}"
                                   required placeholder="Address ...">
                              @error('address')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div> 
                         <div class=" mt-2">
                              <label for="description" class="form-label">Description</label>
                              <input type="text" name="description" id="description" value="{{ old('description') }}" class="form-control" placeholder="description">
                              @error('description')
                              <span class="text-danger">{{ $message }}</span>
                                   
                              @enderror
                         </div> 
                         <div>
                              <input type="hidden" name="created_by" value="{{ Auth::user()->name }}" id="created_by">
                         </div>  

                    <div class="modal-footer mt-2">
                         <button type="submit" style="float: right" class="btn btn-primary ">Add New</button>
                    </div>
                         
                         
                    </form>
               </div>
          </div>
     </div>
</div>