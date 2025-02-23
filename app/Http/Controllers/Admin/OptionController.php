<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\OptionFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.option.index',['options'=>Option::paginate(25)]); //1  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $option=new Option();
        return view('admin.option.form',[
         'option'=>$option
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
          $option=Option::create($request->validated());
        return to_route('admin.option.index')->with('success',"L'option a été bien sauvegardé");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)
    {
        return view('admin.option.form',[
            'option'=>$option
           ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $option)
    {
        $option->update($request->validated());
        return to_route('admin.option.index')->with('success',"L'option a été bien modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        $option->delete();
        return to_route('admin.option.index')->with('success',"L'option a été bien supprimé");
    }
}
