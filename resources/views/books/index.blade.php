@extends('layouts.master')
@section('title','Book')
@push('Header')
     Book {{ $b_count }}
@endpush
@push('sub_Header')
     <a href="/books">book</a> / index
@endpush
@section('content')
     <div>
          <div>
               @if(Session::has('message'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                         {{Session::get('message')}}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
               @endif
               @if(Session::has('message_danger'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         {{Session::get('message_danger')}}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
               @endif
          </div>
          <div>
               @include('books.create')
          </div>

          <div>
               <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle shadow mt-2">
                         <thead>
                              <tr>
                                   <th>Book</th>
                                   <th>ISBN</th>
                                   <th>Released</th>
                                   <th>Edition</th>
                                   <th>Category</th>
                                   <th>Author</th>
                                   <th>Supplier</th>
                                   <th style="width: 9%">Actions</th>
                              </tr>
                         </thead>
                         <tbody id="search_data">
                         @foreach ($book as $b)
                              

                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                        src="/storage/books/cover/{{ $b->image_path }}"
                                        alt=""
                                        style="width: 60px; height: 60px"
                                        class="rounded-2"
                                        />
                                    <div class="ms-3">
                                      <p class="fw-bold mb-1">{{ $b->book_title }}</p>
                                      <p class="text-muted mb-0">Language: {{ $b->language }}</p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p >{{ $b->isbn }}</p>

                                </td>
                                <td>
                                  {{ $b->release_year }}
                                </td>
                                <td>{{ $b->edition }}</td>
                                <td>
                                  {{ $b->Category->category_name }}
                                </td>
                                <td>
                                  {{ $b->Author->fullname }}
                                </td>
                                <td>
                                  {{ $b->Supplier->supplier_name }}
                                </td>
                                <td>
                                   <form action="/books/{{$b ->id}}" method="post" class="d-flex justify-content-between">
                                        @csrf
                                        @method('DELETE')
                                        <a href="javascript:void(0)" onclick="this.parentElement.submit();return confirm('Do want to delete this record?');" class="bi bi-trash text-danger"></a> |
                                        <a href="/books/{{$b ->id}}/edit"  class="bi bi-folder-plus"></a> |
                                        {{-- data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="" --}}
                                        <a href="/books/{{$b ->id}}" class="bi bi-eye">
                                        </a>
                                        
                                   </form>
                                </td>
                              </tr>
                              
                              @endforeach
                            </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-2">
                         {{ $book->links('pagination::bootstrap-4') }}
                    </div>
               </div>
          </div>
     </div>
@endsection