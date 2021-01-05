<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\ImageTrait;
use App\Traits\RemoveImageTrait;

class CategoriesController extends Controller
{
    use ImageTrait, RemoveImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.dashboard.real-estate.categories.index' , ['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.dashboard.real-estate.categories.create' , ['categories'=>$categories]);
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

          $category  = new Category();

          $category->en_title = $request->get('en_title');
          $category->fr_title = $request->get('fr_title');
          $category->es_title = $request->get('es_title');
          $category->ar_title = $request->get('ar_title');

          $category->en_slug = Str::slug($request->get('en_title') , '-');
          $category->fr_slug = Str::slug($request->get('fr_title') , '-');
          $category->es_slug = Str::slug($request->get('es_title') , '-');
          $category->ar_slug = str_replace(' ', '-' , $request->get('ar_title') );

          $picture = $request->picture;

          if ($request->hasFile('picture')){
            // make directory if not created yet
            if (!is_dir(public_path('/assets-file/images'))){
                mkdir(public_path('/assets-file/images/categories') , 0777);
            }

            // save file to the public folder
            $picture = $this->saveImages($request->picture , 'assets-file/images/categories' );

          }

          $category->picture = $picture;

          $category->save();

          return redirect()->back()->with('success','the Category adding with success');
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
         $category = Category::where('id',$id)->first();
         return view('backend.dashboard.real-estate.categories.edit' , ['category'=>$category]);
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

        $category = Category::where('id',$id)->first();

        $picture = '';
        $removable_image_msg = '';
        if ($request->hasFile('picture')){
            // validation
            $request->validate([
                'picture' => 'required|mimes:png,jpg,svg,jpeg'
            ]);

             // remove current file frop public folder
             $removable_image_msg = $this->RemoveImage($category->picture);
             // save file to the public folder
             $picture = $this->saveImages($request->picture , 'assets-file/images/categories' );
             $category->update([
                'en_title'         => $request->get('en_title'),
                'fr_title'         => $request->get('fr_title'),
                'es_title'         => $request->get('es_title'),
                'ar_title'         => $request->get('ar_title'),

                'en_slug'         => Str::slug($request->get('en_title') , '-'),
                'fr_slug'         => Str::slug($request->get('en_title') , '-'),
                'es_slug'         => Str::slug($request->get('en_title') , '-'),
                'ar_slug'         => str_replace(' ', '-' , $request->get('ar_title')),

                'picture'         => $picture,

         ]);
         }else{
            $category->update([

                'en_title'         => $request->get('en_title'),
                'fr_title'         => $request->get('fr_title'),
                'es_title'         => $request->get('es_title'),
                'ar_title'         => $request->get('ar_title'),

                'en_slug'         => Str::slug($request->get('en_title') , '-'),
                'fr_slug'         => Str::slug($request->get('en_title') , '-'),
                'es_slug'         => Str::slug($request->get('en_title') , '-'),
                'ar_slug'         => str_replace(' ', '-' , $request->get('ar_title')),
         ]);
       }

          return redirect()->route('categories.index')->with('success','the Category updated with success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id)->first();
        $category->delete();
        return redirect()->back()->with('danger', 'the category deleted with success');
    }
}
