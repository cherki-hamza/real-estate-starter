<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Profile
                <small>Welcome to Profile Page</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
              <div class="row">
                  <h1>User Profile</h1>
                    <div class="box box-warning mx-5">
                        <div class="box-header with-border">
                            <h3 class="box-title">Profile Info</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="{{route('dashboard.profile_update',['id'=>user->id])}}" method="POST" enctype="multipart/form-data">
                              @csrf
                                <div class="form-group">
                                    <label for="profile_name">Profile UserName</label>
                                    <input id="profile_name" name="profile_name" class="form-control" value="{{$user->name}}" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="profile_ar_name">Profile arabic name</label>
                                    <input id="profile_ar_name" name="profile_ar_name" class="form-control" value="{{$user->ar_name}}" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="user_info">User Image</label>
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="user_info" name="user_info" class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="col-md-6 align-content-center">
                                            <img src="{{asset(Auth::user()->photo())}}" class="img-circle" alt="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    <input id="user_info" name="user_info" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="user_info">User Info</label>
                                    <textarea id="user_info" name="user_info" class="form-control"  rows="5" placeholder="user_info">{{$user->profile->info}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="profile_email">Profile Email</label>
                                    <input id="profile_email" name="profile_email" value="{{$user->email}}" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="user">User Telephone</label>
                                    <input id="profile_name" name="profile_name" value="{{$user->profile->tel}}" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="user_sex">User Sex</label>
                                    <input id="user_sex" name="user_sex" value="{{$user->sex}}" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="user_facebook">Facebook</label>
                                    <input id="user_facebook" value="{{$user->profile->facebook}}" name="user_facebook" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="user_github">Github</label>
                                    <input id="user_github" value="{{$user->profile->github}}" name="user_github" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="user_linkedin">Linkedin</label>
                                    <input id="user_linkedin" value="{{$user->profile->linkedin}}" name="user_linkedin" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="user_website">User Website</label>
                                    <input id="user_website" value="{{$user->profile->website}}" name="user_website" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="user_instagram">User instagram</label>
                                    <input id="user_instagram" value="{{$user->profile->instagram}}" name="user_instagram" class="form-control" type="text">
                                </div>


                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>

                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>


        </section>
        <!-- /.content -->
    </div>
