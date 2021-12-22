<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usermodel;
use  Yajra\DataTables\DataTables;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usermodels = usermodel::get();
        if ($request->ajax()) {
            $allData = DataTables::of($usermodels)
                ->addIndexColumn()
                ->addColumn('id', function ($row) {
                   /* $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id"' .
                        $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm
        editusermodel">Edit</a>';
                    $btn .= '<a href="javascript:void(0)" data-toggle="tooltip" data-id"' .
                        $row->id . '" data-original-title="Delete" class="Delete btn btn-danger btn-sm
        deleteusermodel">Delete</a>';
                    return $btn;*/
                })
                ->rawColumns(['id'])
                ->make(true);
            return $allData;
        }
        return view('admin.users', compact('usermodels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        usermodel::updateOrCreate(
            ['id' => $request->user_id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'date' => $request->date

            ]
        );
        return response()->json(['success' => 'User Added Successfully']);
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
      $user = usermodel::find($id);
      return response()->json($user);

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
        usermodel::find($id)->delete();
        return response()->json(['success' => 'User Deleted Successfully']);
    }
}




