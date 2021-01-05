@extends('backend.master.app-dashboard')

@section('title' , 'Add New Category')

@section('style')
<style>

</style>
@stop

@section('content')
<div class="wrapper">

    <!-- Start Main Header -->
       @include('backend.inc.top-header')
    <!-- End Main Header -->

    <!-- Start Left side column. contains the logo and sidebar -->
       @include('backend.inc.aside-menu')
    <!-- End Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="text-primary">Create New Category : </span>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

               <!-- start row 1 col-md-6 -->
               <div class="col-md-8">

                <div style="margin: 7% auto" class="box box-primary">
                  <div class="box-header">

                      <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                      <!-- end alert -->

                      <h3 class="text-primary">
                         Update the Category
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                          <div class="form-group my-5">
                              <label for="en_title">English Category Title :</label>
                              <input type="text" class="form-control" id="en_title" name="en_title" value="{{$category->en_title}}">
                          </div>

                          <div class="form-group my-5">
                            <label for="fr_title">French Category Title :</label>
                            <input type="text" class="form-control" id="fr_title" name="fr_title" value="{{$category->fr_title}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="es_title">Spain Category Title :</label>
                            <input type="text" class="form-control" id="es_title" name="es_title" value="{{$category->es_title}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_title">Arabic Category Title :</label>
                            <input dir="rtl" type="text" class="form-control" id="ar_title" name="ar_title" value="{{$category->ar_title}}">
                        </div>



                          <div class="form-group my-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="picture">Select Image :</label>
                                    <input type="file" class="form-control bg-info" id="picture" name="picture">
                                </div>
                                <div class="col-md-6 text-center">
                                    <label for="content">Current Image :</label><br/>
                                    <img style="width: 80px;height: 50px;border-radius: 100%" class="img-circle" src="{{asset($category->photo())}}" name="current_picture" alt="">
                                </div>
                            </div>
                          </div>

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="Update the Category">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-6 -->

            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

 @stop


@section('script')


@stop



