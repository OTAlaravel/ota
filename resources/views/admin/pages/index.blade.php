@extends('admin.layouts.master')

@section('th_head')

@endsection

@section('content')
   
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h3 class="card-title ">Pages management 
                                <div class="float-right">
                                    <a href="{{ route('admin.pages.add') }}" class="btn-sm btn-success btn-round "> 
                                    <i class="material-icons">create</i> New</a>
                                </div>

                        </div>
                        <div class="card-body table-responsive">
                            <table class="table" id="order-listing">
                                <thead class=" text-primary"> 
                                    <th>ID</th>
                                    <th>Page Title</th>
                                    <th>Page Slug</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>

                                @foreach ($pages as $page)  
                                    <tr>
                                        <td>{{ $page->id }}</td>
                                        <td>{{ $page->page_title }}</td>
                                        <td>{{ $page->page_slug }}</td>
                                        <td>{{ $page->created_at}}</td>
                                        <td class="text-primary">
                                           <a href="{{ route('admin.pages.edit', $page->id) }}">
                                               <i class="fa fa-cog"></i>
                                           </a>
                                           <a href="{{ route('admin.pages.edit', $page->id) }}">
                                               <i class="fa fa-edit"></i>
                                           </a>
                                            <a href="{{ route('admin.pages.edit', $page->id) }}">
                                               <i class="fa fa-trash" aria-hidden="true"></i>
                                           </a>

                                            <a href="{{ route('admin.pages.edit', $page->id) }}">
                                               <i class="fa fa-trash" aria-hidden="true"></i>
                                           </a>
                                        </td>
                                      </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
@endsection
@section('th_foot')

@endsection