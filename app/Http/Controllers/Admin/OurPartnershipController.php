<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurPartnership;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class OurPartnershipController extends Controller
{

    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerships = OurPartnership::orderBy('id', 'desc')->paginate(10);
        return view('admin.our-partnership.list', compact('partnerships'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $partnerships = OurPartnership::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhere('type', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(10);

            return response()->json(['data' => view('admin.our-partnership.table', compact('partnerships'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.our-partnership.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => "required|string|max:255",
            'type' => "required|string|max:255",
            'logo' => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $our_partnership = new OurPartnership();
        $our_partnership->name = $request->name;
        $our_partnership->type = $request->type;
        $our_partnership->logo = $this->imageUpload($request->file('logo'), 'our_partnership');
        $our_partnership->save();

        return redirect()->route('our-partnerships.index')->with('message', 'Partner created successfully.');
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
        $partnership = OurPartnership::findOrFail($id);
        return view('admin.our-partnership.edit', compact('partnership'));
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
        // return $request;
        $request->validate([
            'name' => "required|string|max:255",
            'type' => "required|string|max:255",
        ]);

        $our_partnership = OurPartnership::findOrFail($id);
        $our_partnership->name = $request->name;
        $our_partnership->type = $request->type;
        if ($request->hasFile('logo')) {
            $request->validate([
                'logo' => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            ]);
            $our_partnership->logo = $this->imageUpload($request->file('logo'), 'our_partnership');
        }
        $our_partnership->save();

        return redirect()->route('our-partnerships.index')->with('message', 'Partner updated successfully.');
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

    public function delete($id)
    {
        $our_partnership = OurPartnership::findOrFail($id);
        $our_partnership->delete();
        return redirect()->route('our-partnerships.index')->with('error', 'Our Core Value has been deleted successfully.');
    }
}
