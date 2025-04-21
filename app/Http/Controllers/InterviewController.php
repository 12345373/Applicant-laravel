<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use Illuminate\Http\Request;

class InterviewController extends Controller
{


      public function index()
    {
        $interviews = Interview::with('user')->get(); // استخدام with لجلب البيانات المرتبطة بـ user
    return view('admin.pages.interview.index', compact('interviews'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $inter_id)
    {
        $interview = new Interview();
        $interview->cv_review_id = $inter_id;
        $interview->status = $request->status;
        $interview->interview_date = $request->interview_date;
        $interview->save();
        return redirect()->back()->with("done", "The interview has been successfully scheduled.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $interview = Interview::findOrFail($id);
        return view('admin.pages.interview.edit', compact('interview'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cv_review_id' => 'required|exists:cv_reviews,id',
            'status' => 'required|string',
            'interview_date' => 'required|date',
        ]);

        $interview = Interview::findOrFail($id);
        $interview->update([
            'cv_review_id' => $request->cv_review_id,
            'status' => $request->status,
            'interview_date' => $request->interview_date,
        ]);

        return redirect()->route('interview.index')->with('success', 'Interview updated successfully!');
    }

    public function destroy($id)
    {
        $interview = Interview::findOrFail($id);
        $interview->delete();

        return redirect()->route('interview.index')->with('success', 'Interview deleted successfully!');
    }
}
