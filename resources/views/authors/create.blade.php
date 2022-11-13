<div class="modal fade" id="exampleModal" tabindex="-1"  aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Create Author</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <form action="/authors" method="post" class="">
                         @csrf
                    <div class="row">
                         <!-- h -->
                         <div class="">
                              <label for="fullname" class="form-label">Author Name</label>
                              <input type="text" name="fullname" class="form-control flex-col" id="fullname" required placeholder="Author...">
                              @error('name')
                              <span class="text-danger">{{ $message }}</span>
                                   
                              @enderror
                              
                         </div>
                         <div class="mt-3">
                              <label for="contact" class="form-label">Contact No.</label>
                              <input type="tel" name="contact" class="form-control flex-col" id="contact" required placeholder="Contact...">
                              @error('contact')
                              <span class="text-danger">{{ $message }}</span>
                                   
                              @enderror
                              
                         </div>
                         <div class="mt-3">
                              <label for="description" class="form-label">Desciption</label>
                              <input type="text" name="description" class="form-control flex-col" id="description" required placeholder="Description...">
                              @error('description')
                              <span class="text-danger">{{ $message }}</span>
                                   
                              @enderror
                              
                         </div>
                   
                    </div>
                         <button type="submit" style="float: right" class="btn btn-info mt-3 form-control">Add New</button>
                         
                    </form>
               </div>
          </div>
     </div>

     
</div>