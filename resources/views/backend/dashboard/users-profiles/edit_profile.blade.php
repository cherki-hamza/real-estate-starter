@extends('backend.master.app-dashboard')

@section('title' , 'All Profiles')

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

          @include('backend.inc.content-edit-profile')


    <!-- /.content-wrapper -->

 @stop


@section('script')

@stop


