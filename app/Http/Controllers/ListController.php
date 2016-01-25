<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todolist;
use App\Category;
use App\Http\Requests\ListFormRequest;


class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Todolist::all();
        return view('Lists.index', compact('list'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::lists('name','id');
        return view('Lists.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $list = new Todolist(array(
            'name'=> $request->get('name'),
            'description'=> $request->get('description')));
        $list->save();


        return \Redirect::route('viewlist')->with('message', 'Your list has created buddy');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = Todolist::findOrFail($id);
        return view('Lists.showlist', compact('list'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = Todolist::findOrFail($id);
        return view('Lists.edit', compact('list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ListFormRequest $request, $id)
    {
        $list = Todolist::findOrFail($id);
        $list->update([
            'name' => $request->get('name'),
            'description'=> $request->get('description')
        ]);
        return \Redirect::route('viewlist', array($list->id))->with('message', 'Your list has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //  dd('destory method');

        $list = Todolist::destroy($id);
        return \Redirect::route('viewlist')->with('message', 'Your list is deleted');

    }
}
