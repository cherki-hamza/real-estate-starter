<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

            <h1 class="text-success">All Users Profiles</h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
      <div class="row">

         @foreach ($profiles as $profile)

         <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                  <div class="bg-warning text-primary float-right">
                    <span class="d-flex">#ID <small class="text-danger" style="margin-left: 4px">{{$profile->id}}</small></span>
                </div>

                <div class="bg-warning text-primary float-left">
                    <span class="text-left">Role  <small class="text-danger" style="margin-left: 4px">{{$profile->user->role}}</small></span>
                </div>

                <img style="width: 300px;height: 300px;border-radius: 100%;" class="profile-user-img img-responsive img-circle" src="{{$profile->ProfileImg()}}" alt="{{$profile->username}}">

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
                    <li class="list-group-item">
                        <b>About</b> <a class="pull-right">{{$profile->about}}</a>
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


                <div class="row text-center">

                  <a href="{{route('dashboard.profile' , $profile->id)}}">  <span class="btn btn-primary"><i style="margin-right: 4px;" class="fa fa-eye  mx-2"></i>Show</span></a>

                  <a href="{{route('dashboard.edit_profile' , $profile->id)}}">  <span class="btn btn-success"><i style="margin-right: 4px;" class="fa fa-edit mx-2"></i>Edit</span></a>

                  {{-- <form action="{{route('dashboard.delete_profile' , $profile->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger">   <i style="margin-right: 4px;" class="fa fa-trash mx-2"></i> Delete</button>
                </form> --}}

                </div>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->
          </div>

         @endforeach

      </div>

    </section>
    <!-- /.content -->
</div>






