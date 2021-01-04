<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Traits\ImageTrait;
use App\Traits\RemoveImageTrait;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    use ImageTrait, RemoveImageTrait;

    // the admin Main dashboard page
    public function index(){

        if(Auth::user()->role == 'admin'){
            return view('backend.dashboard.dashboard');
        }elseif(Auth::user()->role == 'editor'){
            return view('backend.dashboard.dashboard');
        }else{
            return redirect(route('home'));
        }


    }

    // the admin home dashboard page
    public function home(){

        return view('backend.dashboard.dashboard-home');
    }

    // the admin home dashboard page
    public function Users_Profile(){

        if(Auth::user()->role == 'admin'){

            $users = User::all();
            $profiles = Profile::all();
            return view('backend.dashboard.users-profiles.dashboard-profiles' , ['users'=>$users  ,'profiles'=>$profiles]);

        }elseif(Auth::user()->role == 'editor'){

            $user = Auth::user()->profile;
            return view('backend.dashboard.users-profiles.dashboard-user-editor' , ['user'=>$user]);

        }else{

            return redirect(route('home'));

        }


    }


    // route to show user profile
    public function edit_profile($id){
        $profile = Profile::where('id',$id)->first();
        $user = User::where('id',$id)->first();
        return view('backend.dashboard.users-profiles.edit_profile' , ['profile'=>$profile , 'user'=>$user]);
    }


    // get the login user profile
    public function profile($id){
        $profile = User::where('id',$id)->first()->profile;
        $user = User::where('id',$id)->first();
        return view('backend.dashboard.users-profiles.user_profile', ['user'=>$user ,'profile'=>$profile]);
    }


    // update profile
    public function update_profile(Request $request ,$id)
    {
        $profile = Profile::where('id',$id)->first();

        $picture = '';
        $removable_image_msg = '';
        if ($request->hasFile('picture')){
             // remove current file frop public folder
             $removable_image_msg = $this->RemoveImage($profile->picture);
             // save file to the public folder
             $picture = $this->saveImages($request->picture , 'assets-file/images/profile' );
             $profile->update([
                'user_id'         => $request->get('user_id'),
                'username'        => $request->get('username'),
                'ar_username'     => $request->get('ar_username'),
                'email'           => $request->get('email') ,
                'tel'             => $request->get('tel'),
                'country'         => $request->get('country'),
                'ar_country'      => $request->get('ar_country'),
                'city'            => $request->get('city'),
                'ar_city'         => $request->get('ar_city'),
                'about'           => $request->get('about'),
                'ar_about'        => $request->get('ar_about'),
                'more_info'       => $request->get('more_info'),
                'ar_more_info'    => $request->get('ar_more_info'),
                'picture'         => $picture,
                'website'         => $request->get('website'),
                'facebook'        => $request->get('facebook'),
                'twitter'         => $request->get('twitter'),
                'instagram'       => $request->get('instagram'),
                'pinterest'       => $request->get('pinterest')
         ]);
         }else{
            $profile->update([
                'user_id'         => $request->get('user_id'),
                'username'        => $request->get('username'),
                'ar_username'     => $request->get('ar_username'),
                'email'           => $request->get('email') ,
                'tel'             => $request->get('tel'),
                'country'         => $request->get('country'),
                'ar_country'      => $request->get('ar_country'),
                'city'            => $request->get('city'),
                'ar_city'         => $request->get('ar_city'),
                'about'           => $request->get('about'),
                'ar_about'        => $request->get('ar_about'),
                'more_info'       => $request->get('more_info'),
                'ar_more_info'    => $request->get('ar_more_info'),
                'website'         => $request->get('website'),
                'facebook'        => $request->get('facebook'),
                'twitter'         => $request->get('twitter'),
                'instagram'       => $request->get('instagram'),
                'pinterest'       => $request->get('pinterest')
         ]);
         }

        // validate input you have to be required
        /*  $request->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            'picture' => 'mimes:jpeg,bmp,png,jpg,svg',
         ]); */

        return redirect()->back()->with('success' , 'The Profile Updated With success '.$removable_image_msg);

    }

    // permessions  ==> ( show and make permession to the users just by admin user )
    public function users_permessions(){
        $users = User::all();
       return view('backend.dashboard.permessions.dashboard-users-permessions' , ['users'=>$users]);
    }


    // change user permession to admin
    public function make_admin(User $user){
        $user->role = "admin";
        $user->save();
        return redirect()->back()->with('success','the user updated to admin');
    }

     // change user permession to admin
     public function make_editor(User $user){
        $user->role = "editor";
        $user->save();
        return redirect()->back()->with('success','the user updated to editor');
    }

     // change user permession to admin
     public function make_user(User $user){
        $user->role = "user";
        $user->save();
        return redirect()->back()->with('success','the user updated to user');
    }


     // the admin contact dashboard page
     public function contact(){
        return view('backend.dashboard.dashboard');
    }

    // route to delete user profile
    public function delete_profile($id){

      $profile = Profile::find($id)->first();
      $profile->delete();
      return redirect()->back()->with('danger','the profile trashed with success');
    }

}
