<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

use App\Blog;
use Validator;
use Session;
use Auth;
use DB;
use Purifier;

use Jenssegers\Date\Date;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return View('blog.index')->with('blog',$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->user_id = Auth::user()->id;

      $rules = array(
          'title' => 'required',
          'tag' => 'required',
          'content' => 'required',
          'image' => 'required'
      );

      $validator = Validator::make($request->all(),$rules);

      if ($validator->fails()) {
          return redirect('admin/blog/create')
              ->withErrors($validator)
              ->withInput();
      } else {
          $blog = new Blog;
          if(Input::file('image') != NULL && Input::file('image')->isValid()){
              $destinationPath = 'uploads/blog';
              $extension = Input::file('image')->getClientOriginalExtension();
              $fileName = date('YmdHms').'_'.$request->user_id.'.'.$extension;
              Input::file('image')->move($destinationPath, $fileName);
              $blog->image = $fileName;
          }

          $blog->user_id = $request->user_id;
          $blog->title = $request->title;
          $blog->content = Purifier::clean(Input::get('content'));
          $blog->tag = $request->tag;
          $blog->save();

          Session::flash('message', 'Berhasil menambahkan news & events!');
          return redirect('blog');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return View('blog.view')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
