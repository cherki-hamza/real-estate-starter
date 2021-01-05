<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\ImageTrait;
use App\Traits\RemoveImageTrait;

class AreasController extends Controller
{
    use ImageTrait, RemoveImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
        return view('backend.dashboard.real-estate.areas.index' , ['areas'=>$areas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view('backend.dashboard.real-estate.areas.create' , ['areas'=>$areas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'required|mimes:png,jpg,svg,jpeg'
        ]);

          $area  = new Area();

          $area->en_area = $request->get('en_area');
          $area->fr_area = $request->get('fr_area');
          $area->es_area = $request->get('es_area');
          $area->ar_area = $request->get('ar_area');

          $area->en_area_slug = Str::slug($request->get('en_area') , '-');
          $area->fr_area_slug = Str::slug($request->get('fr_area') , '-');
          $area->es_area_slug = Str::slug($request->get('es_area') , '-');
          $area->ar_area_slug = str_replace(' ', '-' , $request->get('ar_area') );

          $picture = $request->picture;

          if ($request->hasFile('picture')){
            // make directory if not created yet
            if (!is_dir(public_path('/assets-file/images'))){
                mkdir(public_path('/assets-file/images/areas') , 0777);
            }

            // save file to the public folder
            $picture = $this->saveImages($request->picture , 'assets-file/images/areas' );

          }

          $area->picture = $picture;

          $area->save();

          return redirect()->back()->with('success','the Area adding with success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = Area::where('id',$id)->first();
        return view('backend.dashboard.real-estate.areas.edit' , ['area'=>$area]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $area = Area::where('id',$id)->first();

        $picture = '';
        $removable_image_msg = '';
        if ($request->hasFile('picture')){
            // validation
            $request->validate([
                'picture' => 'required|mimes:png,jpg,svg,jpeg'
            ]);

             // remove current file frop public folder
             $removable_image_msg = $this->RemoveImage($area->picture);
             // save file to the public folder
             $picture = $this->saveImages($request->picture , 'assets-file/images/areas' );
             $area->update([
                'en_area'         => $request->get('en_area'),
                'fr_area'         => $request->get('fr_area'),
                'es_area'         => $request->get('es_area'),
                'ar_area'         => $request->get('ar_area'),

                'en_area_slug'         => Str::slug($request->get('en_area_slug') , '-'),
                'fr_area_slug'         => Str::slug($request->get('fr_area_slug') , '-'),
                'es_area_slug'         => Str::slug($request->get('es_area_slug') , '-'),
                'ar_area_slug'         => str_replace(' ', '-' , $request->get('ar_area_slug')),

                'picture'         => $picture,

         ]);
         }else{
            $area->update([

                'en_area'         => $request->get('en_area'),
                'fr_area'         => $request->get('fr_area'),
                'es_area'         => $request->get('es_area'),
                'ar_area'         => $request->get('ar_area'),

                'en_area_slug'         => Str::slug($request->get('en_area_slug') , '-'),
                'fr_area_slug'         => Str::slug($request->get('fr_area_slug') , '-'),
                'es_area_slug'         => Str::slug($request->get('es_area_slug') , '-'),
                'ar_area_slug'         => str_replace(' ', '-' , $request->get('ar_area_slug')),
         ]);
       }

          return redirect()->route('areas.index')->with('success','the Area updated with success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area::find($id)->first();
        $area->delete();
        return redirect()->back()->with('danger', 'the area deleted with success');
    }
}
