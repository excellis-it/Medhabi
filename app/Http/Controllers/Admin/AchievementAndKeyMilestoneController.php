<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\KeyMilestone;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class AchievementAndKeyMilestoneController extends Controller
{

    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = Achievement::get();
        $key_milestones = KeyMilestone::get();
        return view('admin.achievements-and-key-milestones.update')->with(compact('achievements', 'key_milestones'));
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
        $request->validate([
            'title.*' => 'required',
            'description.*' => 'required',
            'key_milestone_title.*' => 'required',
            'key_milestone_description.*' => 'required',
        ], [
            'title.*.required' => 'Title field is required.',
            'description.*.required' => 'Description field is required.',
            'key_milestone_title.*.required' => 'Key Milestone Title field is required.',
            'key_milestone_description.*.required' => 'Key Milestone Description field is required.',
        ]);

        if ($request->title) {
            Achievement::truncate();
            foreach ($request->title as $key => $value) {
                $achievement = new Achievement();
                $achievement->title = $value;
                $achievement->description = $request->description[$key];
                $achievement->save();
            }
        }

        if ($request->key_milestone_title) {
            if (isset($request->key_milestone_image_id)  && count($request->key_milestone_image_id) > 0) {
                KeyMilestone::whereNotIn('id', $request->key_milestone_image_id)->delete();
            }

            foreach ($request->key_milestone_title as $key => $value) {
                if (isset($request->key_milestone_image_id[$key])) {
                    $key_milestone = KeyMilestone::find($request->key_milestone_image_id[$key]);
                } else {
                    $key_milestone = new KeyMilestone();
                }

                $key_milestone->title = $value;
                $key_milestone->description = $request->key_milestone_description[$key];
                if (isset($request->file('key_milestone_image')[$key]) && $request->hasFile('key_milestone_image') && $request->file('key_milestone_image')[$key]) {
                    $key_milestone->logo = $this->imageUpload($request->file('key_milestone_image')[$key], 'key_milestones');
                }
                $key_milestone->save();
            }
        }

        session()->flash('message', 'Data updated successfully.');
        return response()->json(['message' => 'Data updated successfully.']);
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
