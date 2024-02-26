<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerCmsModule;
use App\Models\CareerPageCms;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class PageController extends Controller
{
    use ImageTrait;
    public function career()
    {
        $career = CareerPageCms::orderByDesc('id')->first();
        $careerModules = CareerCmsModule::all();
        return view('admin.pages.career')->with(compact('career', 'careerModules'));
    }

    public function careerUpdadte(Request $request)
    {
        $request->validate([
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'banner_title' => 'required|max:255',
            'banner_description' => 'required',
            'section_1_title' => 'required|max:255',
            'section_1_description' => 'required',
            'section_1_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'section_1_url' => 'required|url',
            'section_2_title' => 'required|max:255',
            'section_2_description' => 'required|max:255',
            'section_3_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'section_3_title_1' => 'required|max:255',
            'section_3_description_1' => 'required',
            'section_3_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'section_3_title_2' => 'required|max:255',
            'section_3_description_2' => 'required',
            'section_3_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'section_3_title_3' => 'required|max:255',
            'section_3_description_3' => 'required',
            'section_4_title' => 'required|max:255',
            'section_4_description' => 'required',
            'section_4_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'section_5_title' => 'required|max:255',
            'section_5_description' => 'required',
            'section_6_title' => 'required|max:255',
            'section_6_description' => 'required',
            'section_6_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'section_7_title' => 'required|max:255',
            'section_7_description' => 'required',
            'section_8_title' => 'required|max:255',
            'section_8_description' => 'required',
        ]);
        $data = $request->all();
        $count = CareerPageCms::count();
        if ($count == 0) {
            $career = new CareerPageCms();
        } else {
            $career = CareerPageCms::orderByDesc('id')->first();
        }
 
        // Assign values from the request data to career properties
        if ($request->hasFile('banner_image')) {
            $career->banner_image = $this->imageUpload($request->file('banner_image'), 'career');
        }

        $career->banner_title = $data['banner_title'] ?? null;
        $career->banner_description = $data['banner_description'] ?? null;
        $career->section_1_title = $data['section_1_title'] ?? null;
        $career->section_1_description = $data['section_1_description'] ?? null;

        if ($request->hasFile('section_1_image')) {
            $career->section_1_image = $this->imageUpload($request->file('section_1_image'), 'career');
        }

        $career->section_1_url = $data['section_1_url'] ?? null;
        $career->section_2_title = $data['section_2_title'] ?? null;
        $career->section_2_description = $data['section_2_description'] ?? null;
        if ($request->hasFile('section_3_image_1')) {
            $career->section_3_image_1 = $this->imageUpload($request->file('section_3_image_1'), 'career');
        }

        $career->section_3_title_1 = $data['section_3_title_1'] ?? null;
        $career->section_3_description_1 = $data['section_3_description_1'] ?? null;
        if ($request->hasFile('section_3_image_2')) {
            $career->section_3_image_2 = $this->imageUpload($request->file('section_3_image_2'), 'career');
        }
        $career->section_3_title_2 = $data['section_3_title_2'] ?? null;
        $career->section_3_description_2 = $data['section_3_description_2'] ?? null;

        if ($request->hasFile('section_3_image_3')) {
            $career->section_3_image_3 = $this->imageUpload($request->file('section_3_image_3'), 'career');
        }
        $career->section_3_title_3 = $data['section_3_title_3'] ?? null;
        $career->section_3_description_3 = $data['section_3_description_3'] ?? null;
        $career->section_4_title = $data['section_4_title'] ?? null;
        $career->section_4_description = $data['section_4_description'] ?? null;
        if ($request->hasFile('section_4_image')) {
            $career->section_4_image = $this->imageUpload($request->file('section_4_image'), 'career');
        }
        $career->section_5_title = $data['section_5_title'] ?? null;
        $career->section_5_description = $data['section_5_description'] ?? null;
        $career->section_6_title = $data['section_6_title'] ?? null;
        $career->section_6_description = $data['section_6_description'] ?? null;
        if ($request->hasFile('section_6_image')) {
            $career->section_6_image = $this->imageUpload($request->file('section_6_image'), 'career');
        }

        $career->section_7_title = $data['section_7_title'] ?? null;
        $career->section_7_description = $data['section_7_description'] ?? null;
        $career->section_8_title = $data['section_8_title'] ?? null;
        $career->section_8_description = $data['section_8_description'] ?? null;
        $career->save();

        if ($request->module_description) {
            foreach ($request->module_description as $key => $value) {
                if (isset($request->module_image_id[$key])) {
                    $module = CareerCmsModule::find($request->module_image_id[$key]);
                } else {
                    $module = new CareerCmsModule();
                }

                $module->description = $value;

                if ($request->hasFile('module_image') && $request->file('module_image')[$key]) {
                    $module->image = $this->imageUpload($request->file('module_image')[$key], 'career');
                }

                $module->save();
            }
        }

        return redirect()->back()->with('message', 'Content update successfully.');
    }
}
