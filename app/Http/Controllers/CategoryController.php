<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Categories::all();
        return response()->json([
            'message' => 'Successfully',
            'data' =>  $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Categories::create([
            'name' => $request->name,
            'color' => $request->color,
            'status' => $request->status
        ]);

                 Or

        $cat = new Categories();
        $cat->name = $request->name;
        $cat->color = $request->color;
        $cat->status = $request->status;
        if($cat->save()){
            return response()->json([
                'message' => 'Create successfully.'
            ]);
        }
                Or
        */
        $data = [
            'name' => $request->name,
            'color' => $request->color,
            'status' => $request->status
        ];
        Categories::create($data);
        return response()->json([
            'message' => 'Create new category successfully.'
        ]);

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
