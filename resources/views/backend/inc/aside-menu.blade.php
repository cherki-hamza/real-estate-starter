<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img style="width: 70px;height: 50px;border-radius: 100%;" src="{{asset(Auth::user()->photo())}}" class="img-circle" alt="{{Auth::user()->name}}">
                </div>
                <div class="pull-left info">
                    <p> <a href="{{route('dashboard.profile',Auth::user()->id)}}"> {{Auth::user()->name}} </a></p>
                    <!-- Status -->
                    <a href="{{route('dashboard.profile',Auth::user()->id)}}"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            {{-- <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form> --}}
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                {{-- <li class="header text-primary">Menu</li> --}}

                <li class="active"><a href="{{ route('dashboard') }}"><i style="font-size: 2rem;" class="fas fa-archway text-primary"></i> <span>Dashboard</span></a></li>
                <li class="active"><a href="{{ route('dashboard.home') }}"><i style="font-size: 2rem;" class="fas fa-home text-primary"></i> <span>Home</span></a></li>

                @if (Auth::user()->role == 'admin')

                <li class="active"><a href="{{route('dashboard.permessions')}}"><i style="color: goldenrod;font-size: 2rem" class="fas fa-user-shield"></i> <span>Permessions</span></a></li>

                @endif


                @if (Auth::user()->role == 'editor')

                <li class="active"><a href="{{ route('dashboard.users_profiles') }}"><i style="font-size: 2rem;" class="fas fa-user text-primary"></i> <span>{{Auth::user()->profile->username}}</span></a></li>

                @else

                <li class="active"><a href="{{ route('dashboard.users_profiles') }}"><i style="font-size: 2rem;" class="fas fa-user text-primary"></i> <span>All Users</span></a></li>
                @endif

                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Categories</span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('categories.create')}}">Add New Category</a></li>
                        <li><a href="{{route('categories.index')}}">Show All Categories</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>

                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Areas</span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('areas.create')}}">Add New Area</a></li>
                        <li><a href="{{route('areas.index')}}">Show All Areas</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>

                <li class="active"><a href="{{ route('dashboard.contact') }}"><i style="font-size: 2rem;" class="fas fa-address-card text-primary"></i> <span>Contact</span></a></li>


            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>





















    {{-- <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>{{__('dashboard.BLOG')}}</span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">My Blog</a></li>
                        <li><a href="#">Edit Blog</a></li>
                    </ul>
                </li> --}}
