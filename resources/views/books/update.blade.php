@extends('layouts.master')
@section('title','Update Book')
@push('Header')
     Update Book
@endpush
@push('sub_Header')
     <a href="/books">book</a> / update
@endpush
@section('content')
     <div>
          <div class="modal-body">
               <form action="/books/{{ $book->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                <div>
                 <div class="row">
                  <div class="col-9">
                    <div>
                     <label for="book_title" class="form-label">Book Title</label>
                     <input type="text" name="book_title" value="{{ $book->book_title }}" required class="form-control" placeholder="Book title...">
                     @error('book_title')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>
                    <div class="mt-2">
                     <label for="isbn" class="form-label">Book ISBN</label>
                     <input type="text" name="isbn" value="{{ $book->isbn }}" required placeholder="ISBN..." class="form-control" >
                     @error('isbn')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>
                    <div class="row">
                         <div class="col-md-6 mt-2">
                              <label for="language" class="form-label">Language</label>
                              <select name="language" id="language" class="form-select">
                                  <option value="{{ $book->language }}" style="display: none">{{ $book->language }}</option>
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
                         <div class="col-md-6 mt-2">
                              <label for="release_year" class="form-label">Release year</label>
                               <select name="release_year" id="release_year" class="form-select">
                                   <option value="{{ $book->release_year }}" style="display: none">{{ $book->release_year }}</option>
                                   <option value="1910">1910</option>
                                   <option value="1911">1911</option>
                                   <option value="1912">1912</option>
                                   <option value="1913">1913</option>
                                   <option value="1914">1914</option>
                                   <option value="1915">1915</option>
                                   <option value="1916">1916</option>
                                   <option value="1917">1917</option>
                                   <option value="1918">1918</option>
                                   <option value="1919">1919</option>
                                   <option value="1920">1920</option>
                                   <option value="1921">1921</option>
                                   <option value="1922">1922</option>
                                   <option value="1923">1923</option>
                                   <option value="1924">1924</option>
                                   <option value="1925">1925</option>
                                   <option value="1926">1926</option>
                                   <option value="1927">1927</option>
                                   <option value="1928">1928</option>
                                   <option value="1929">1929</option>
                                   <option value="1930">1930</option>
                                   <option value="1931">1931</option>
                                   <option value="1932">1932</option>
                                   <option value="1933">1933</option>
                                   <option value="1934">1934</option>
                                   <option value="1935">1935</option>
                                   <option value="1936">1936</option>
                                   <option value="1937">1937</option>
                                   <option value="1938">1938</option>
                                   <option value="1939">1939</option>
                                   <option value="1940">1940</option>
                                   <option value="1941">1941</option>
                                   <option value="1942">1942</option>
                                   <option value="1943">1943</option>
                                   <option value="1944">1944</option>
                                   <option value="1945">1945</option>
                                   <option value="1946">1946</option>
                                   <option value="1947">1947</option>
                                   <option value="1948">1948</option>
                                   <option value="1949">1949</option>
                                   <option value="1950">1950</option>
                                   <option value="1951">1951</option>
                                   <option value="1952">1952</option>
                                   <option value="1953">1953</option>
                                   <option value="1954">1954</option>
                                   <option value="1955">1955</option>
                                   <option value="1956">1956</option>
                                   <option value="1957">1957</option>
                                   <option value="1958">1958</option>
                                   <option value="1959">1959</option>
                                   <option value="1960">1960</option>
                                   <option value="1961">1961</option>
                                   <option value="1962">1962</option>
                                   <option value="1963">1963</option>
                                   <option value="1964">1964</option>
                                   <option value="1965">1965</option>
                                   <option value="1966">1966</option>
                                   <option value="1967">1967</option>
                                   <option value="1968">1968</option>
                                   <option value="1969">1969</option>
                                   <option value="1970">1970</option>
                                   <option value="1971">1971</option>
                                   <option value="1972">1972</option>
                                   <option value="1973">1973</option>
                                   <option value="1974">1974</option>
                                   <option value="1975">1975</option>
                                   <option value="1976">1976</option>
                                   <option value="1977">1977</option>
                                   <option value="1978">1978</option>
                                   <option value="1979">1979</option>
                                   <option value="1980">1980</option>
                                   <option value="1981">1981</option>
                                   <option value="1982">1982</option>
                                   <option value="1983">1983</option>
                                   <option value="1984">1984</option>
                                   <option value="1985">1985</option>
                                   <option value="1986">1986</option>
                                   <option value="1987">1987</option>
                                   <option value="1988">1988</option>
                                   <option value="1989">1989</option>
                                   <option value="1990">1990</option>
                                   <option value="1991">1991</option>
                                   <option value="1992">1992</option>
                                   <option value="1993">1993</option>
                                   <option value="1994">1994</option>
                                   <option value="1995">1995</option>
                                   <option value="1996">1996</option>
                                   <option value="1997">1997</option>
                                   <option value="1998">1998</option>
                                   <option value="1999">1999</option>
                                   <option value="2000">2000</option>
                                   <option value="2001">2001</option>
                                   <option value="2002">2002</option>
                                   <option value="2003">2003</option>
                                   <option value="2004">2004</option>
                                   <option value="2005">2005</option>
                                   <option value="2006">2006</option>
                                   <option value="2007">2007</option>
                                   <option value="2008">2008</option>
                                   <option value="2009">2009</option>
                                   <option value="2010">2010</option>
                                   <option value="2011">2011</option>
                                   <option value="2012">2012</option>
                                   <option value="2013">2013</option>
                                   <option value="2014">2014</option>
                                   <option value="2015">2015</option>
                                   <option value="2016">2016</option>
                                   <option value="2017">2017</option>
                                   <option value="2018">2018</option>
                                   <option value="2019">2019</option>
                                   <option value="2020">2020</option>
                                   <option value="2021">2021</option>
                                   <option value="2022">2022</option>
                                   <option value="2023">2023</option>
                                   <option value="2024">2024</option>
                                   <option value="2025">2025</option>
                                   <option value="2026">2026</option>
                                   <option value="2027">2027</option>
                                   <option value="2028">2028</option>
                                   <option value="2029">2029</option>
                                   <option value="2030">2030</option>
                               </select>
                              @error('release_year')
                               <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6 mt-2">
                              <label for="edition" class="form-label">Edition</label>
                               <select name="edition" id="edition" class="form-select">
                                   <option value="{{ $book->edition }}" style="display: none">{{ $book->edition }}</option>
                                   <option value="Edition 1">Edition 1</option>
                                   <option value="Edition 2">Edition 2</option>
                                   <option value="Edition 3">Edition 3</option>
                                   <option value="Edition 4">Edition 4</option>
                                   <option value="Edition 5">Edition 5</option>
                                   <option value="Edition 6">Edition 6</option>
                                   <option value="Edition 7">Edition 7</option>
                                   <option value="Edition 8">Edition 8</option>
                                   <option value="Edition 9">Edition 9</option>
                                   <option value="Edition 10">Edition 10</option>
                                   <option value="Edition 11">Edition 11</option>
                                   <option value="Edition 12">Edition 12</option>
                                   <option value="Edition 13">Edition 13</option>
                                   <option value="Edition 14">Edition 14</option>
                                   <option value="Edition 15">Edition 15</option>
                                   <option value="Edition 16">Edition 16</option>
                                   <option value="Edition 17">Edition 17</option>
                                   <option value="Edition 18">Edition 18</option>
                                   <option value="Edition 19">Edition 19</option>
                                   <option value="Edition 20">Edition 20</option>
                               </select>
                              @error('edition')
                               <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                         <div class="col-md-6 mt-2">
                              <label for="category_id" class="form-label">Category</label>
                              <select name="category_id" required id="category_id" class="form-control">
                                   <option value="{{ $book->category_id }}" style="display: none;">{{ $book->Category->category_name }} ( {{ $book->Category->Rack->rack_name }} )</option>
                                   @foreach ($cate as $c)
                                        <option value="{{ $c->id }}">{{ $c->category_name }} ( {{ $c->Rack->rack_name }} )</option>
                                   @endforeach
                              </select>
                         </div>
                    </div>
                    <div>
                         <div class="row mt-2">
                              
                              <div class="col-6">
                                   <label for="author_id" class="form-label">Author</label>
                                   <select name="author_id" required id="author_id" class="form-control">
                                        <option value="{{ $book->author_id }}" style="display: none;">{{ $book->Author->fullname }}</option>
                                        @foreach ($auth as $a)
                                             <option value="{{ $a->id }}">{{ $a->fullname }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              <div class="col-6">
                                   <label for="supplier_id" class="form-label">Supplier</label>
                                   <select name="supplier_id" required id="supplier_id" class="form-control">
                                        <option value="{{ $book->supplier_id }}" style="display: none;">{{ $book->Supplier->supplier_name }}</option>
                                        @foreach ($supp as $s)
                                             <option value="{{ $s->id }}">{{ $s->supplier_name }} ( {{ $s->company_name }} )</option>
                                        @endforeach
                                   </select>
                              </div>
                         </div>
                     </div>
                  </div>
                  <div class="col-3 justify-content-center">
                   <div>
                    <label for="" class="form-label">Book Cover</label>
                    <div class="justify-content-center align-content-center">
                         <img src="/storage/books/cover/{{ $book->image_path }}" width="100%" height="305px" alt="cover" id="cover" class=" ">
                    </div>
                    <div>
                         <input type="file" name="photo" accept="images/*" class="form-control mt-2" id="">
                    </div>
                   </div>
     
                  </div>
                 </div>
                </div>
               
                
                <div>
                    <div class="mt-2">
                         <label for="description" class="form-label">Description</label>
                         <textarea name="description" id="description" class="form-control" cols="30" rows="2" placeholder="Say something ...">
                         {{ $book->description }}
                         </textarea>
                    </div>
                </div>
                <div>
                    <input type="hidden" name="updated_by" value="{{ Auth::user()->name }}">
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary ml-3">Update Now</button>
               </div>
               </form>
              </div>
<script>


     </script>
     <script>
          let profile= document.querySelector('input[type=file]');
          profile.addEventListener("change",function(e){
               var img = document.querySelector('#cover');
               img.setAttribute("src",window.URL.createObjectURL(e.target.files[0]));
               img.setAttribute("style", "display.block;width:100%;height:305px;object-fit:fill;");
               output.onload = function(){
                    URL.revokeObjectURL(output.src)
               }

          });
     </script>
     </div>
@endsection