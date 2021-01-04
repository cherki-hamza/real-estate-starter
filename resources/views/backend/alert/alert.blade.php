@if($message = Session::get('success'))
<div class="my-2 alert alert-success">

    <strong>{{$message}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@elseif($message = Session::get('danger'))
<div class="my-2 alert alert-danger">
    <strong>{{$message}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@elseif($message = Session::get('warning'))
<div class="my-2 alert alert-warning">
    <strong>{{$message}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@elseif($message = Session::get('info'))
<div class="my-2 alert alert-info">
    <strong>{{$message}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@elseif($message = Session::get('darck'))
<div class="my-2 alert alert-darck">
    <strong>{{$message}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
