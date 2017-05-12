<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use Session;
use App\Groups;
use App\Files;
//use App\Files;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Groups::join('files','groups.id','=','files.linkedid')
                        ->where('files.type','=','groups')
                        ->select('groups.name as g_name','groups.id as g_id','filename','path','desc','level')
                        ->orderBy('groups.id','desc')
                        ->paginate(10);
//        return view('groups.index',compact('groups'));
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $add = Groups::create([
            'name' => $inputs['name'],
            'level' => $inputs['level'],
            'desc' => $inputs['desc'],
            'admin' => ''
        ]);
        if ($add){
            if ($request->hasFile('cover')) {
                $photo = $request->file('cover');
                FileUploader::Upload($photo,'uploads/groups/'. $add->id .'/',$add->id,'groups');
            }else
                return response()->json(['can' => $request->file('cover')]);
        }
        Session::put('success','Group add successfully');
        return response()->json($add);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Groups::join('files','groups.id','=','files.linkedid')
                        ->where('groups.id','=',$id)
                        ->where('files.type','=','groups')
                        ->select('groups.name as g_name','path','filename','level','desc','groups.id as g_id')
                        ->first();
        return view('groups.show',compact('group'));
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
        $inputs = $request->all();
        $edit = Groups::find($id)->update($inputs);
        if ($edit){
            if ($request->hasFile('cover')) {
                Files::where('linkedid',$id)->where('type','groups')->delete();
                $photo = $request->file('cover');
                FileUploader::Upload($photo,'uploads/groups/'. $id .'/',$id,'groups');
            }

            Session::put('success','Group is edit successfully');
            return response()->json($edit);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Groups::find($id)->delete();
        if ($group){
            Files::where('linkedid',$id)->where('type','groups')->delete();
            Session::put('success','Group is Deleted Successfully');
            return response()->json(['done']);
        }
    }
}
