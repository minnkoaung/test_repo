<?php

namespace App\Http\Controllers;

use App\TaskCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskCategory  $taskCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TaskCategory $taskCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TaskCategory  $taskCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskCategory $taskCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskCategory  $taskCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskCategory $taskCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TaskCategory  $taskCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskCategory $taskCategory)
    {
        //
    }
}
