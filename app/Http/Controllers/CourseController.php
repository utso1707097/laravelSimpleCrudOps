<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        

        //data call
        $courses = Course::latest() ->paginate(5);
        //dd($courses);
        //return view('courses.index',compact('courses'));
        $courses = Course::latest()->paginate(5);
        return view('courses.index',compact('courses'))
            ->with('i',(request()->input('page',1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd("save data");
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'fee' => 'required',
        ]);
        Course::Create($request->all());
        return redirect()->route('course.index')
                ->with('success','course Created successfully cdone');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //dd('show');
        return view('courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //dd("great to go");
        return view('courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'fee' => 'required',
        ]);
       $course->update($request->all());

        return redirect()->route('course.index')
            ->with('success','course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //dd("delete hobe");
        $course->delete();
        return redirect()->route('course.index')
                ->with('success','course deleted successfully');
    }
}
