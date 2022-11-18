@extends('layouts.master')
@section('title','View Book')
@push('Header')
     Book Detail
@endpush
@push('sub_Header')
     <a href="/books">book</a> / view
@endpush
@section('content')
     
    <div class="">
          <div class="card">
               <div class="card-header">

                         <div class="row">
                              <div class="col-md-6">
                                   <h3>Book Title: {{ $book->book_title }} </h3>
                              </div>
                              <div class="col-md-6 d-flex justify-content-end" >
                                   <p class="text-muted">Created {{ $book->created_at->format('d-M-Y') }}By {{ $book->created_by }}  
                                       | Updated {{ $book->updated_at->format('d-M-Y') }} By {{ $book->updated_by }}</p>
                              </div>
                         </div>
               
               </div>
               <div class="book-detail">
                    <div class="row">
                         <div class="col-md-3">
                              <div class="profile-img-book">
                                   <img class="rounded-2" src="/storage/books/cover/{{ $book->image_path }}" alt="">
                              </div>
                              <div>
                                   {{-- <table class="table table-striped">
                                        <tr>
                                             <th>ID</th>
                                             <td>{{ $emp->id }}</td>
                                        </tr>
                                   </table> --}}
                              </div>
               
                         </div>
                         <div class="col-md-9">
                              <div class="table-responsive">
                                   <table class="table table-striped table-hover">
                                        <tbody>
                                             <tr>
                                                  <th>ID</th>
                                                  <td class="code">{{ $book->id }}</td>
                                             </tr>
                                             <tr>
                                                  <th>ISBN</th>
                                                  <td class="code">{{ $book->isbn }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Language</th>
                                                  <td class="code">{{ $book->language }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Released</th>
                                                  <td class="code">{{ $book->release_year }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Edition</th>
                                                  <td class="code">{{ $book->edition }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Category</th>
                                                  <td class="code">{{ $book->Category->category_name }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Author</th>
                                                  <td class="code">{{ $book->Author->fullname }}</td>
                                             </tr>
                                             <tr>
                                                  <th>Supplier</th>
                                                  <td class="code">{{ $book->Supplier->supplier_name }}</td>
                                             </tr>
          
                                        </tbody>
                                        
                                   </table>
                              </div>
                         </div>
                         
                       </div>
               </div>
                    <div class="book-description">
                         <label for="">Description</label>
                         <p>{{ $book->description }}</p>
                    </div>
               <div class="card-footer">
                    <div class="d-flex justify-content-end">
                         <a href="/books" class="btn btn-info mr-4">Back</a>
                         <a href="/books/{{ $book->id }}/edit" class="btn btn-primary">Go To Update</a>
                    </div>
               </div>
          </div>
        
    </div>
@endsection