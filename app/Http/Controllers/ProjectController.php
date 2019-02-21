<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Storage;
use Image;

class ProjectController extends Controller
{
    public function index() {
        $project = Project::all();
        return view('adminlte.project.project', compact('project'));
    }


    public function create() {
        return view('adminlte.project.project-create');
    }


    public function store(Request $request) {
        $newproject = new Project;
        $newproject->name = $request->name;
        $newproject->description = $request->description;

        if(isset($request->icon)){
            $newproject->icon = $request->icon->store('', 'image');
            $path = Storage::disk('image')->path($newproject->icon);
            $img = Image::make($path)->resize(100,100);    
            $img->save();
        }

        if(isset($request->image)){
            $newproject->image = $request->image->store('', 'image');
            $path = Storage::disk('image')->path($newproject->image);
            $img = Image::make($path)->resize(100,100);    
            $img->save();
        }

        $newproject->save();
        return view('home');
    }

    
    public function show(Project $project) {
        return view('adminlte.project.project-show', compact('project'));
    }

    
    public function edit(Project $project) {
        return view('adminlte.project.project-edit', compact('project'));
    }

    
    public function update(Request $request, Project $project) {
        $project->name = $request->name;
        $project->description = $request->description;

        if(isset($request->icon)){
            $project->icon = $request->icon->store('', 'image');
            $path = Storage::disk('image')->path($project->icon);
            $img = Image::make($path)->resize(100,100);    
            $img->save();
        }

        if(isset($request->image)){
            $project->image = $request->image->store('', 'image');
            $path = Storage::disk('image')->path($project->image);
            $img = Image::make($path)->resize(100,100);    
            $img->save();
        }

        $project->save();

        return view('home');
    }

    
    public function destroy(Project $project) {
        $project->delete();
        return redirect()->back();
    }
}
