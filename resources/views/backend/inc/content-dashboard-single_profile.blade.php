<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Profile : </span>
            <small> <div class="box-body row">
                <a href="{{route('dashboard.edit_profile' , $profile->id)}}">
                  <span class="btn btn-success"><i class="fa fa-edit text-danger"></i>Edit Profile {{$profile->username}}</span>
                </a>
            </div></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- start row -->
        <div class="row">

              <!-- start div 1 col-md-6 -->
             <div class="col-md-6">
                <div class="box d-flex box-primary">
                <div class="box-body box-profile">
                    <div class="bg-warning text-danger float-right">
                        <span class="float-right d-flex">#ID <small class="text-danger" style="margin-left: 4px">{{$profile->id}}</small></span>
                    </div>
                    <img class="profile-user-img img-responsive img-circle" src="{{$profile->ProfileImg()}}" alt="{{$profile->username}}">

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                        <b>Username</b> <a class="pull-right">{{$profile->username}}</a>
                        </li>
                        <li class="list-group-item">
                        <b>Arabic Username</b> <a class="pull-right">{{$profile->ar_username}}</a>
                        </li>
                        <li class="list-group-item">
                        <b>Email</b> <a class="pull-right">{{$profile->email}}</a>
                        </li>

                    </ul>

                    <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Website</b> <a class="pull-right">{{$profile->website}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Facebook</b> <a class="pull-right">{{$profile->facebook}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Twitter</b> <a class="pull-right">{{$profile->twitter}}</a>
                    </li>
                    </ul>


                </div>

                </div>
             </div>
             <!-- start div 1 col-md-6 -->

            <!-- start div 2 col-md-6 -->
             <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">About Me</h3>
                    </div>
                    <div class="box-body">
                      <strong><i class="fa fa-book margin-r-5"></i> profile Informations</strong>

                      <p class="text-muted">
                        {{$profile->about}}
                      </p>

                      <hr>

                      <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                      <p class="text-muted">{{$profile->country}}, {{$profile->city}}</p>

                      <hr>

                      <strong><i class="fa fa-pencil margin-r-5"></i> Sex</strong>

                      <p>
                        <span class="label label-danger">{{$user->sex}}</span>
                      </p>

                      <hr>

                      <strong><i class="fa fa-file-text-o margin-r-5"></i> Role</strong>

                      <p>
                        <span class="label text-bold label-danger">{{$user->role}}</span>
                      </p>
                    </div>
                  </div>
            </div>
            <!-- end div 2 col-md-6 -->

        </div>
        <!-- end row -->
        <div class="box-body row text-center">
            <a href="{{route('dashboard.edit_profile' , $profile->id)}}">
              <span class="btn btn-success"><i class="fa fa-edit"></i>Edit Profile</span>
           </a>
         </div>
        </section>
        <!-- Main content -->
</div>


