@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Page Content</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('page.index') }}">Page List</a></li>
                    <li class="breadcrumb-item active">Add Page Content</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Add Page Content</h3>
                            <a href="{{ route('page.index') }}" class="btn btn-primary">Go Back to page List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('page.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                       
                                        <div class="form-group">
                                            <label for="name">Select Page</label>
                                            <select name="page" class="form-control">
                                                <option value="contact-us">Contact Us</option>
                                                <option value="about-us">About Us</option>
                                                <option value="terms-and-condition">Terms And Condition</option>
                                            </select>
                                           
                                        </div>  

                                        <div class="form-group">
                                            <label for="name">Title</label>
                                            <input type="text" name="title" class="form-control" id="name" placeholder="Enter Content Title">
                                        </div>  
                                   

                                    <div class="form-group">
                                            <label for="name">Content</label>
                                            <textarea  type="text" name="content" class="form-control summernote"  rows="4" placeholder="Enter Content detail"></textarea>
                                        </div>  
                                    

                                   

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
        $(document).ready(function() {
          $('.summernote').summernote();
        });
    </script>

@endsection