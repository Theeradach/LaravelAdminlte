@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.categories.index') }}">Categories</a>
                </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->    

<section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('admin.categories.update', $category->id) }}">   {{-- sent back to categories controller --}}
                {{ method_field('PUT') }}     {{--  use for update method  --}}
                {{ csrf_field() }}
               <div class="form-group">
                   <div class="row">
                        <label class="col-md-3">Title</label>
                        <div class="col-md-6">
                            <input type="text" name="title" class="form-control" value="{{ $category->title }}"> {{-- get from categories controller --}}
                        </div>
                        <div class="clearfix"></div>
                   </div>
               </div>
               <div class="form-group">
                   <input type="submit" class="btn btn-info" value="Save">
               </div>
           </form>
        </div>
    </section>

@endsection