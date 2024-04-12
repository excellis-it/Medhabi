<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderByDesc('id')->paginate(15);
        return view('admin.menus.list', compact('menus'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $menus = Menu::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhere('slug', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(15);

            return response()->json(['data' => view('admin.menus.table', compact('menus'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menus.create');
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
            'name' => [
                'required',
                Rule::unique('menus')->where(function ($query) use ($request) {
                    return $query->where('type', $request->type);
                }),
            ],
            'type' => 'required',
            'status' => 'required'
        ]);

        $menu = new Menu();
        $menu->parent_id = $request->parent_id ?? 0;
        $menu->name = $request->name;
        $menu->slug = $request->slug;
        $menu->type = $request->type;
        $menu->status = $request->status;
        $menu->is_custom_link = $request->is_custom_link ?? 0;
        $menu->save();

        return redirect()->route('menus.index')->with('message', 'Menu created successfully');
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
        $menu = Menu::findOrFail($id);
        return view('admin.menus.edit', compact('menu'));
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
        $menu = Menu::findOrFail($id);
        $request->validate([
            'name' => [
                'required',
                Rule::unique('menus')->ignore($menu->id)->where(function ($query) use ($request) {
                    return $query->where('type', $request->type);
                }),
            ],
            'type' => 'required',
            'status' => 'required'
        ]);

        $menu->parent_id = $request->parent_id ?? 0;
        $menu->name = $request->name;
        $menu->slug = $request->slug;
        $menu->type = $request->type;
        $menu->status = $request->status;
        $menu->is_custom_link = $request->is_custom_link ?? 0;
        $menu->save();

        return redirect()->route('menus.index')->with('message', 'Menu updated successfully');
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
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->back()->with('message', 'Menu deleted successfully');
    }
}
