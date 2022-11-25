
<div class="d-flex justify-content-between">
     <div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
               Add New Books
          </button>

     </div>
     <div class="part-search">
          <form action="/books" method="get">
               <div class="input-group">
                    <span class="input-group-text" id="search-box">Search</span>
                    <input type="search" id="search_box" name="search" class="form-control" placeholder="Search title, isbn, language" aria-label="Username" aria-describedby="basic-addon1">
                    <button type="submit" class="btn btn-info">Search</button>
               </div>
          </form>
       </div>
       <div class="">
          <a href="" class="btn btn-primary">Print</a>
       </div>
       <div class="part-filter">
          <div class="" style="float: right;">
               <div class="dropdown">
                    <button class="btn btn-md btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                        </svg>
                        Filter
                    </button>
                    {{-- <select name="" id="">
                         <option value="all">All</option>
                    </select> --}}
                    <ul class="dropdown-menu">
                         <li class=""><a href="/home?filter=asc">Sort by old</a></li>
                    </ul>
                </div>
          </div>
       </div>
</div>

<div>
     <!-- Button trigger modal -->

   
   <!-- Modal -->
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl"  style="width: 60%" >
       <div class="modal-content">
         <div class="modal-header">
           <h1 class="modal-title fs-5" id="staticBackdropLabel">Create New Book</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
          <form action="/books" method="POST" enctype="multipart/form-data">
               @csrf
           <div>
            <div class="row">
             <div class="col-8">
               <div>
                <label for="book_title" class="form-label">Book Title</label>
                <input type="text" name="book_title" value="{{ old('book_title') }}" required class="form-control" placeholder="Book title...">
                @error('book_title')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
               </div>
               <div class="mt-2">
                <label for="isbn" class="form-label">Book ISBN</label>
                <input type="text" name="isbn" value="{{ old('isbn') }}" required placeholder="ISBN..." class="form-control" >
                @error('isbn')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
               </div>
               <div class="mt-2">
                <label for="language" class="form-label">Language</label>
                <select name="language" id="language" class="form-select">
                    <option value="" style="display: none">Choose language</option>
                    <option value="Afrikaans">Afrikaans</option>
                    <option value="Albanian">Albanian</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Armenian">Armenian</option>
                    <option value="Basque">Basque</option>
                    <option value="Bengali">Bengali</option>
                    <option value="Bulgarian">Bulgarian</option>
                    <option value="Catalan">Catalan</option>
                    <option value="Cambodian">Cambodian</option>
                    <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                    <option value="Croatian">Croatian</option>
                    <option value="Czech">Czech</option>
                    <option value="Danish">Danish</option>
                    <option value="Dutch">Dutch</option>
                    <option value="English" selected>English</option>
                    <option value="Estonian">Estonian</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finnish">Finnish</option>
                    <option value="French">French</option>
                    <option value="Georgian">Georgian</option>
                    <option value="German">German</option>
                    <option value="Greek">Greek</option>
                    <option value="Gujarati">Gujarati</option>
                    <option value="Hebrew">Hebrew</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Hungarian">Hungarian</option>
                    <option value="Icelandic">Icelandic</option>
                    <option value="Indonesian">Indonesian</option>
                    <option value="Irish">Irish</option>
                    <option value="Italian">Italian</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Javanese">Javanese</option>
                    <option value="Korean">Korean</option>
                    <option value="Latin">Latin</option>
                    <option value="Latvian">Latvian</option>
                    <option value="Lithuanian">Lithuanian</option>
                    <option value="Macedonian">Macedonian</option>
                    <option value="Malay">Malay</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Maltese">Maltese</option>
                    <option value="Maori">Maori</option>
                    <option value="Marathi">Marathi</option>
                    <option value="Mongolian">Mongolian</option>
                    <option value="Nepali">Nepali</option>
                    <option value="Norwegian">Norwegian</option>
                    <option value="Persian">Persian</option>
                    <option value="Polish">Polish</option>
                    <option value="Portuguese">Portuguese</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Quechua">Quechua</option>
                    <option value="Romanian">Romanian</option>
                    <option value="Russian">Russian</option>
                    <option value="Samoan">Samoan</option>
                    <option value="Serbian">Serbian</option>
                    <option value="Slovak">Slovak</option>
                    <option value="Slovenian">Slovenian</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Swahili">Swahili</option>
                    <option value="Swedish ">Swedish </option>
                    <option value="Tamil">Tamil</option>
                    <option value="Tatar">Tatar</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Thai">Thai</option>
                    <option value="Tibetan">Tibetan</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Turkish">Turkish</option>
                    <option value="Ukrainian">Ukrainian</option>
                    <option value="Urdu">Urdu</option>
                    <option value="Uzbek">Uzbek</option>
                    <option value="Vietnamese">Vietnamese</option>
                    <option value="Welsh">Welsh</option>
                </select>
                @error('isbn')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
               </div>
               <div class="mt-2">
                <label for="release_year" class="form-label">Release year</label>
                 <select name="release_year" id="release_year" class="form-select">

                 </select>
                @error('isbn')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
               </div>
               <div class="mt-2">
                <label for="edition" class="form-label">Edition</label>
                 <select name="edition" id="edition" class="form-select">

                 </select>
                @error('edition')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
               </div>
             </div>
             <div class="col-4">
              <div>
               <label for="" class="form-label">Book Cover</label>
               <div>
                    <img src="" alt="cover" id="cover">
               </div>
               <div>
                    <input type="file" name="photo" accept="images/*" class="form-control mt-2" id="">
               </div>
              </div>

             </div>
            </div>
           </div>
          
           <div>
               <div class="row mt-2">
                    <div class="col-4">
                         <label for="category_id" class="form-label">Category</label>
                         <select name="category_id" required id="category_id" class="form-control">
                              <option value="" style="display: none;">Choose category</option>
                              @foreach ($cate as $c)
                                   <option value="{{ $c->id }}">{{ $c->category_name }} ( {{ $c->Rack->rack_name }} )</option>
                              @endforeach
                         </select>
                    </div>
                    <div class="col-4">
                         <label for="author_id" class="form-label">Author</label>
                         <select name="author_id" required id="author_id" class="form-control">
                              <option value="" style="display: none;">Choose author</option>
                              @foreach ($auth as $a)
                                   <option value="{{ $a->id }}">{{ $a->fullname }}</option>
                              @endforeach
                         </select>
                    </div>
                    <div class="col-4">
                         <label for="supplier_id" class="form-label">Supplier</label>
                         <select name="supplier_id" required id="supplier_id" class="form-control">
                              <option value="" style="display: none;">Choose supplier</option>
                              @foreach ($supp as $s)
                                   <option value="{{ $s->id }}">{{ $s->supplier_name }} ( {{ $s->company_name }} )</option>
                              @endforeach
                         </select>
                    </div>
               </div>
           </div>
           <div>
               <div class="mt-2">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="2" placeholder="Say something ..."></textarea>
               </div>
           </div>
           <div>
               <input type="hidden" name="created_by" value="{{ Auth::user()->name }}">
           </div>
           <div class="mt-3 d-flex justify-content-end">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-primary ml-3">Add New</button>
          </div>
          </form>
         </div>
        
       </div>
     </div>
   </div>

   <script>
     (function () {
         let year_satart = 1910;
         let year_end = (new Date).getFullYear(); // current year
         let year_selected = 2010;
     
         let option = '';
         option = '<option>Year</option>'; // first option
     
         for (let i = year_satart; i <= year_end; i++) {
             let selected = (i === year_selected ? ' selected' : '');
             option += '<option value="' + i + '"' + selected + '>' + i + '</option>';
         }
     
         document.getElementById("release_year").innerHTML = option;
     })();
     (function () {
         let year_satart = 1;
         let year_end = 20; // current year
         let year_selected = 1;
     
         let option = '';
         option = '<option>Year</option>'; // first option
     
         for (let i = year_satart; i <= year_end; i++) {
             let selected = (i === year_selected ? ' selected' : '');
             option += '<option value="' +'Edition'+' '  + i + '"' + selected + '>'+ 'Edition'+' '  + i + '</option>';
         }
     
         document.getElementById("edition").innerHTML = option;
     })();
     </script>
     <script>
          let profile= document.querySelector('input[type=file]');
          profile.addEventListener("change",function(e){
               var img = document.querySelector('#cover');
               img.setAttribute("src",window.URL.createObjectURL(e.target.files[0]));
               img.setAttribute("style", "display.block;width:100%;height:300px;object-fit:fill;");
               output.onload = function(){
                    URL.revokeObjectURL(output.src)
               }

          });
     </script>
</div>