<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Edit Profile
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <h1 class="text-success">Edit Profile</h1>
             <div class="row">

                <!-- start row 1 col-md-6 -->
                 <div class="col-md-6">

              <div class="box">
                <div class="box-header">

                    <!-- start alert -->
                 <span>    @include('backend.alert.alert') </span>
                    <!-- end alert -->

                    <h3 class="text-primary">
                       Edit Profile
                    </h3>
                </div>
                <div class="box-body">
                    <form action="{{route('dashboard.profile_update' , $profile->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group my-5">
                            <label for="username">Username :</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{$profile->username}}">
                            <input type="hidden" name="user_id" value="{{$profile->user_id}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_username">Arabic Username :</label>
                            <input type="text" class="form-control" id="ar_username" name="ar_username" value="{{$profile->ar_username}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$profile->email}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="tel">Tel :</label>
                            <input type="text" class="form-control" id="tel" name="tel" value="{{$profile->tel}}">
                        </div>

                        <div class="form-group my-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="country">Country :</label>
                                    <input type="text" class="form-control" id="country" name="country" value="{{$profile->country}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="ar_country">Arabic Country :</label>
                                    <input type="text" class="form-control" id="ar_country" name="ar_country" value="{{$profile->ar_country}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group my-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="city">City :</label>
                                    <input type="text" class="form-control" id="city" name="city" value="{{$profile->city}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="ar_city">Arabic City :</label>
                                    <input type="text" class="form-control" id="ar_city" name="ar_city" value="{{$profile->ar_city}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group my-5">
                            <label for="website">Website :</label>
                            <input type="text" class="form-control" id="website" name="website" value="{{$profile->website}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="facebook">Facebook :</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" value="{{$profile->facebook}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="instagram">Instagram :</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" value="{{$profile->instagram}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="instagram">Twitter :</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" value="{{$profile->instagram}}">
                        </div>

                        <div class="form-group my-5">
                            <label for="about">About :</label>
                            <textarea type="text" class="form-control" id="about" name="about" rows="2" >{{$profile->about}}</textarea>
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_about">Arabic About :</label>
                            <textarea type="text" class="form-control" id="ar_about" name="ar_about" rows="2" >{{$profile->ar_about}}</textarea>
                        </div>

                        <div class="form-group my-5">
                            <label for="more_info">More Info :</label>
                            <textarea type="text" class="form-control" id="more_info" name="more_info" rows="2" >{{$profile->more_info}}</textarea>
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_more_info">Arabic More Info :</label>
                            <textarea type="text" class="form-control" id="ar_more_info" name="ar_more_info" rows="2" >{{$profile->ar_more_info}}</textarea>
                        </div>




                        <div class="form-group my-5">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="picture">Select Image :</label>
                                    <input type="file" class="form-control bg-info" id="picture" name="picture">
                                </div>
                                <div class="col-md-6 text-center">
                                    <label for="content">Current Image :</label><br/>
                                    <img style="width: 80px;height: 50px;border-radius: 100%" class="img-circle" src="{{$profile->ProfileImg()}}" name="current_picture" alt="{{$profile->username}}">
                                </div>
                            </div>


                        </div>

                        <div class="form-group my-5">
                            <input type="submit" class="btn btn-success" value="Update Profile">
                        </div>
                    </form>
              </div>

            </div>
        </div>
        <!-- end row 1 col-md-6 -->

        <!-- start row 2 col-md-6 -->
            <div class="col-md-6">
                <div class="box d-flex box-primary">
                    <div class="box-body box-profile">
                        <div class="bg-warning text-danger float-right">
                            <span class="float-right d-flex">#ID <small class="text-danger" style="margin-left: 4px">{{$profile->id}}</small></span>
                        </div>
                        <img style="width: 300px;height: 300px;" class="profile-user-img img-responsive img-circle" src="{{$profile->ProfileImg()}}" alt="{{$profile->username}}">

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
            <!-- start row 2 col-md-6 -->

             </div>

        </div>


        </section>
        <!-- /.content -->
    </div>
