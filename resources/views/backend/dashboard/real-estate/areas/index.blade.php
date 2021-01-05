@extends('backend.master.app-dashboard')

@section('title' , 'All Areas')

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
                <span class="text-primary">All Areas : </span>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

              <!-- start div 2 col-md-6 -->
              <div class="col-md-12">
                <div class="box box-primary">
                     <!-- start alert -->
                   <span>    @include('backend.alert.alert') </span>
                   <!-- end alert -->
                <h2 class="text-success">all Areas</h2>
                <div class="box-body">
                <table class="table table-bordered table-hover responsive">
                    <thead>
                        <tr class="bg-success">
                        <th>#Id</th>
                        <th>Area Image</th>
                        <th>English Title</th>
                        <th>Fransh Title</th>
                        <th>Spain Title</th>
                        <th>Arabic Title</th>
                        <th class="bg-info">Edit</th>
                        <th class="bg-danger">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($areas as $area)
                        <tr class="">
                            <td>{{$area->id}}</td>
                            <td>
                                <img style="width: 50px;height: 50px;border-radius: 100%" src="{{asset($area->photo())}}" alt="{{$area->en_area}}">
                            </td>
                            <td>{{$area->en_area}}</td>
                            <td>{{$area->fr_area}}</td>
                            <td>{{$area->es_area}}</td>
                            <td>{{$area->ar_area}}</td>


                            <td><a href="{{route('areas.edit' , $area->id)}}">  <span class="btn btn-success"><i style="margin-right: 4px;" class="fa fa-edit "></i>Edit</span></a></td>

                            <td> <form action="{{route('areas.destroy' , $area->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">   <i style="margin-right: 4px;" class="fa fa-trash"></i> Delete</button>
                            </form>
                            </td>



                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
         </div>
              <!-- end div 2 col-md-6 -->

        </section>
    </div>
    <!-- end row  -->
    <!-- /.content-wrapper -->

 @stop


@section('script')


@stop



