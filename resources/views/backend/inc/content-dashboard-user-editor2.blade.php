<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1 class="text-success">Editor User Profile</h1>
</section>

<!-- Main content -->
<section class="content">
<div class="row">

  <div class="col-md-12">
    <div class="row">

        <div class="col-md-5">
            <div class="card">
                <img src="{{$user->ProfileImg()}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$user->username}}</h5>
                    <p class="card-text">{{$user->email}}</p>
                    <div class="row d-flex text-center">
                        <a href="{{route('dashboard.profile',$user->id)}}">  <span class="btn btn-primary"><i style="margin-right: 4px;" class="fa fa-eye  mx-2"></i>Show</span></a>
                        <a href="{{route('dashboard.edit_profile' , $user->id)}}">  <span class="btn btn-success"><i style="margin-right: 4px;" class="fa fa-edit mx-2"></i>Edit</span></a>
                          <a href="">   <span class="btn btn-danger"><i style="margin-right: 4px;" class="fa fa-trash mx-2"></i>Delete</span></a>
                        </div>
                  </div>
                </div>

        </div>

        <div class="col-md-5">

        </div>
       </div>

  </div>

</div>
</section>
<!-- /.content -->
</div>






