<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-success"> All Users Permessions</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->

          <div class="box table-responsive shadow my-5 mx-2">
              <div class="box-header">
                <h2 class="box-title text-success"> Permessions</h2>
              </div>
              <div class="box-body">
                <table style="justify-content: center;" class="table  table-responsive table-bordored table-hover table-striped">
                    <thead>
                        <tr  class="bg-primary text-center">
                            <th>#ID</th>
                            <th>Photo</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Role</th>
                            <th class="text-darck">Actions</th>
                        </tr>

                    </thead>

                    <tbody>
                       @foreach ($users as $user)
                        <tr>
                           <td>{{$user->id}}</td>
                           <td>
                               <img style="width: 70px;height: 50px;border-radius: 100%;" class="img-circle" src="{{$user->profile->ProfileImg()}}" alt="{{$user->username}}">
                           </td>
                           <td>{{$user->profile->username}}</td>
                           <td>{{$user->email}}</td>
                           <td>{{$user->profile->tel}}</td>

                           @if ($user->isAdmin())
                             <td class="text-danger font-weight-bold">{{$user->role}}</td>
                           @elseif($user->isEditor())
                           <td class="text-success font-weight-bold">{{$user->role}}</td>
                           @else
                           <td>{{$user->role}}</td>
                           @endif

                           <td>
                               <div class="row d-flex">
                                <a href="{{route('dashboard.permessions.make-admin' , $user->id)}}">
                                 <span class="btn btn-primary"><i style="margin-right: 4px;" class="fas fa-user-secret  mx-2"></i>Make Admin</span>
                                </a>
                                <a href="{{route('dashboard.permessions.make-editor' , $user->id)}}">
                                 <span class="btn btn-success"><i style="margin-right: 4px;" class="fas fa-user-edit mx-2"></i>Make Editor</span>
                                </a>
                                <a href="{{route('dashboard.permessions.make-user' , $user->id)}}">
                                 <span class="btn btn-warning"><i style="margin-right: 4px;" class="fa fa-user mx-2"></i>Make User</span>
                                </a>
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
