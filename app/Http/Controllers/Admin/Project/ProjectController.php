<?php

namespace App\Http\Controllers\Admin\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Project_images;
use App\Models\Project_categories;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.project.index', [
            'projects' => Project::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create', [
            'categories' =>Project_categories::pluck('name', 'id'),
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
        $this->validate($request, [
            'title' => 'required|max:255|unique:projects',
            'subtitle' => 'required|max:255|unique:projects',
            'description' => 'required|unique:projects',
            'date' => 'required',
            'link' => 'required|unique:projects',
            'category_id' => 'required',
        ]);

        $model = new Project();
        $model->title = $request->get('title');
        $model->subtitle = $request->get('subtitle');
        $model->description = $request->get('description');
        $model->date = $request->get('date');
        $model->link = $request->get('link');
        $model->category_id = $request->get('category_id');
        $model->save();

        foreach ($request->file() as $files){
            foreach ($files as $file){
                $image_name = str_random(7);
                $file->move(public_path('images/project/'), $image_name .'.'. $file->getClientOriginalExtension());
                $photo = new Project_images();
                $photo->project_id = $model->id;
                $photo->name = $image_name.'.'.$file->getClientOriginalExtension();
                $photo->save();
            }
        }

        return redirect()->route('project.index')->with('success', 'Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.project.show', [
            'project' => Project::find($id),
            'images' => \DB::table('project_images')->where('project_id', '=', $id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.project.edit', [
            'project' => Project::find($id),
            'categories' => Project_categories::pluck('name', 'id'),
        ]);
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
        $this->validate($request, [
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'description' => 'required',
            'date' => 'required',
            'link' => 'required',
            'category_id' => 'required',
        ]);

        $model = new Project();
        $model->title = $request->get('title');
        $model->subtitle = $request->get('subtitle');
        $model->description = $request->get('description');
        $model->date = $request->get('date');
        $model->link = $request->get('link');
        $model->category_id = $request->get('category_id');
        $model->save();
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
