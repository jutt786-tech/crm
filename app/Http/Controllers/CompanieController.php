<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companie;
use Session;

class CompanieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('companie.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('companie.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $rule=[
                'name'=>'required|max:60',
                'email'=>'required',
                'website'=>'required',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8829955 ',
                ];
                $this->validate($request,$rule);

                $image=$request->file('logo');
                $upload='img/';
                $filename=time().$image->getClientOriginalName(); 
                $path=move_uploaded_file($image->getPathName(), $upload.$filename);  

                $c= new Companie;
                $c->name= $request->name;
                $c->email= $request->email;
                $c->website= $request->website;
                $c->logo= $filename;
                $c->save();

                Session::flash('message','Company Created Sucessfully');
                return redirect('companie/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $companies=Companie::paginate(4 );
        return view('companie.show',compact('companies'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companie=Companie::find($id);
        return view('companie.edit',compact('companie'));
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
                $rule=[
                'name'=>'required|max:60',
                'email'=>'required',
                'website'=>'required',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8829955 ',
                ];
                $this->validate($request,$rule);


                $image=$request->file('logo');
                $upload='img/';
                $filename=time().$image->getClientOriginalName(); 
                $path=move_uploaded_file($image->getPathName(), $upload.$filename);  

                $c=  Companie::find($id);
                $c->name= $request->name;
                $c->email= $request->email;
                $c->website= $request->website;
                $c->logo= $filename;
                $c->save();

                Session::flash('message','Company Update Sucessfully');
                return redirect('companie/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c =Companie::where('id',$id)->first();
        if ($c != null) 
        {
            $c->delete();
            return redirect('companie/show')->with(['message'=> 'Company Successfully deleted!!']);
        }
       return redirect('companie/show')->with('message','Company Delete Sucessfully');
    }
        
}
