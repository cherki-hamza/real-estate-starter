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
 <script src="{{ asset('backend/backend-assets/en/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('backend/backend-assets/en/js/tinymce/js/tinymce/jquery.tinymce.min.js') }}"></script>
 <script>
    $(function(){
       $('textarea.tinymce').tinymce({

            @if(LaravelLocalization::getCurrentLocale() ==='ar')
               language: 'ar',
               directionality: 'rtl',
            @elseif(LaravelLocalization::getCurrentLocale() ==='fr')
               language: 'fr',
               directionality: 'ltr',
             @endif

          height : 600,
          plugins:[
             'advlist autolink lists link image charmap print preview hr anchor pagebreak',
             'searchreplace wordcount visualblocks visualchars code fullscreen',
             'inserdatetime media nonbreaking save table contextmenu directionality',
             'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
          ],
          toolbar1:'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
          file_picker_callback (callback, value, meta) {
        let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
        let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

        tinymce.activeEditor.windowManager.openUrl({
          url : '/file-manager/tinymce5',
          title : 'Laravel File manager',
          width : x * 0.8,
          height : y * 0.8,
          onMessage: (api, message) => {
            callback(message.content, { text: message.text })
          }
        })
      }

       });
    });
 </script>
@stop

{{-- @if(config('app.locale')  == 'ar')

      language: 'ar',
      directionality: 'rtl',

      @elseif(config('app.locale')  == 'fr')

      language: 'fr',
      directionality: 'ltr',

@endif --}}

