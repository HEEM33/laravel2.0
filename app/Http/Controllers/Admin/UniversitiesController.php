<?php

namespace App\Http\Controllers\Admin;

use App\Models\Universities;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UniversitiesFormRequest;
use Illuminate\Support\Facades\File;

class UniversitiesController extends Controller
{
    public function index()
    {
        $universities = Universities::all();
        return view('admin.universities.index', compact('universities'));
    }

    public function create()
    {
        return view('admin.universities.create');
    }

    public function store(UniversitiesFormRequest $request)
    {
        $data = $request->validated();

        $universities = new universities;
        $universities-> name = $data['name'];
        $universities-> description = $data['description'];
        
        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '-' . $file->getClientOriginalExtension();
            $file->move('uploads/universities/', $filename);
            $universities->image = $filename;
        }

        $universities->save();

        return redirect('admin/universities')->with('message', 'University added succesfully');
    }
    public function edit($universities_id)
    {
        $universities = Universities::find($universities_id);
        return view('admin/universities.edit', compact('universities'));
    }

    public function update(UniversitiesFormRequest $request, $universities_id)
    {
        $data = $request->validated();

        $universities = Universities::find($universities_id);
        $universities-> name = $data['name'];
        $universities-> description = $data['description'];
        
        if($request->hasfile('image')){
            $destination = 'uploads/universities/'.$universities->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '-' . $file->getClientOriginalExtension();
            $file->move('uploads/universities/', $filename);
            $universities->image = $filename;
        }
        $universities->update();
        return redirect('admin/universities')->with('message', 'University updated succesfully');
    }

    public function destroy($universities_id)
    {
        $universities = Universities::find($universities_id);
        if($universities)
        {
            $destination = 'uploads/universities/'.$universities->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $universities->delete();
            return redirect('admin/universities')->with('message', 'University deleted succesfully');
        }
        else
        {
            return redirect('admin/universities')->with('message', 'No university id found');
        }
    }

    //
}
