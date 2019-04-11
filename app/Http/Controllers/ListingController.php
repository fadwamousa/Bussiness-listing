<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateListRequest;
use App\Listing;
use Auth;
class ListingController extends Controller
{

    public function __construct()
      {
          $this->middleware('auth')->except('index','show');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $listigs = Listing::orderBy('created_at','DESC')->paginate(15);
      return view('index')->with('listings',$listigs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateListRequest $request)
    {
       $listing = Listing::create(
         [
           'name'    =>$request->name,
           'email'   =>$request->email,
           'website' =>$request->website,
           'phone'   =>$request->phone,
           'address' =>$request->address,
           'bio'     =>$request->bio,
           'user_id' =>auth()->user()->id
         ]
       );


       return redirect()->intended('/dashboard')->with('success','Listing Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return view('show',compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
      $user_id = auth()->user()->id;
      $list = Listing::find($id);
        if ($user_id != $list->user_id) {
         return redirect('/dashboard');
       } else {
         $listing = Listing::find($id);
         return view('project.edit',compact('listing'));
       }
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateListRequest $request, $id)
    {

      $listing = Listing::findOrFail($id);

      $listing->update($request->all());

      return redirect()->intended('/dashboard')->with('success','Listing Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $listing = Listing::findOrFail($id);
      $listing->delete();
      return redirect()->intended('/dashboard')->with('success','Listing Deleted');
    }
}
