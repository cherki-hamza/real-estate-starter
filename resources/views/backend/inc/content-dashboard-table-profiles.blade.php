<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Main Dashboard
            <small>Welcome to Dashboard</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->

          <div class="box table-responsive shadow my-5 mx-2">
              <div class="box-header">
                <h2 class="box-title text-success">All Profiles</h2>
              </div>
              <div class="box-body">
                <table class="table  table-responsive table-bordored table-hover table-striped">
                    <thead>
                        <tr  class="bg-primary text-center">
                            <th>#ID</th>
                            <th>Photo</th>
                            <th>Username</th>
                            <th>Arabic Username</th>
                            <th>Email</th>
                            <th>About</th>
                            <th>Website</th>
                            <th>Facebook</th>
                            <th class="text-darck">Actions</th>
                        </tr>

                    </thead>

                    <tbody>
                       @foreach ($profiles as $profile)
                        <tr>
                           <td>{{$profile->id}}</td>
                           <td>
                               <img style="width: 70px;height: 50px;border-radius: 100%;" class="img-circle" src="{{$profile->ProfileImg()}}" alt="{{$profile->username}}">
                           </td>
                           <td>{{$profile->username}}</td>
                           <td>{{$profile->ar_username}}</td>
                           <td>{{$profile->email}}</td>
                           <td>{{$profile->about}}</td>
                           <td>{{$profile->website}}</td>
                           <td>{{$profile->facebook}}</td>
                           <td>
                               <div class="row d-flex">
                                 <span class="btn btn-primary"><i style="margin-right: 4px;" class="fa fa-eye  mx-2"></i>Show</span>
                                 <span class="btn btn-success"><i style="margin-right: 4px;" class="fa fa-edit mx-2"></i>Edit</span>
                                 <span class="btn btn-danger"><i style="margin-right: 4px;" class="fa fa-trash mx-2"></i>Delete</span>
                               </div>
                           </td>
                        </tr>
                       @endforeach
                    </tbody>

                </table>
              </div>
          </div>


    </section>
    <!-- /.content -->
</div>
