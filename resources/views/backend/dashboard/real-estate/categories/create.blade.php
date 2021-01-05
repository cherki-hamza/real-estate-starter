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
               <div class="col-md-6">

                <div class="box box-primary">
                  <div class="box-header">

                      <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                      <!-- end alert -->

                      <h3 class="text-primary">
                         Add New Category
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group my-5">
                              <label for="en_title">English Category Title :</label>
                              <input type="text" class="form-control" id="en_title" name="en_title">
                          </div>

                          <div class="form-group my-5">
                            <label for="fr_title">French Category Title :</label>
                            <input type="text" class="form-control" id="fr_title" name="fr_title">
                        </div>

                        <div class="form-group my-5">
                            <label for="es_title">Spain Category Title :</label>
                            <input type="text" class="form-control" id="es_title" name="es_title">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_title">Arabic Category Title :</label>
                            <input dir="rtl" type="text" class="form-control" id="ar_title" name="ar_title">
                        </div>



                          <div class="form-group my-5">

                              <div class="row">
                                  <div class="col-md-12">
                                      <label for="picture">Select Image :</label>
                                      <input type="file" class="form-control bg-info" id="picture" name="picture">
                                  </div>
                              </div>


                          </div>

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="Add New Category">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-6 -->

              <!-- start div 2 col-md-6 -->
                <div class="col-md-6">
                        <div class="box box-primary">
                        <h2 class="text-success">all categories</h2>
                        <div class="box-body">
                        <table class="table table-bordered table-hover responsive">
                            <thead>
                                <tr class="bg-success">
                                <th>#Id</th>
                                <th>Category Image</th>
                                <th>English Title</th>
                                <th>Fransh Title</th>
                                <th>Spain Title</th>
                                <th>Arabic Title</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $cat)
                                <tr class="">
                                    <td>{{$cat->id}}</td>
                                    <td>
                                        <img style="width: 50px;height: 50px;border-radius: 100%" src="{{asset($cat->photo())}}" alt="{{$cat->en_title}}">
                                    </td>
                                    <td>{{$cat->en_title}}</td>
                                    <td>{{$cat->fr_title}}</td>
                                    <td>{{$cat->es_title}}</td>
                                    <td>{{$cat->ar_title}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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



