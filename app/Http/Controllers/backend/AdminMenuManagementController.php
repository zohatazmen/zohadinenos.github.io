<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\MenuModel;
use Illuminate\Http\Request;

class AdminMenuManagementController extends Controller
{
    public function index()
    {
        $menus = MenuModel::all();

        return view('backend.menumanagement', compact('menus'));
    }

    public function addMenu()
    {
        return view('backend.menumanagement-add');
    }

    public function submitMenuRecord(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'category' => 'required|min:3',
            'price' => 'required|numeric|min:0',
            'rating' => 'required|integer|min:0|max:5',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $imagePath = $this->uploadImage($request->file('image'));

        $menu = new MenuModel();
        $menu->name = $request->name;
        $menu->category = $request->category;
        $menu->price = $request->price;
        $menu->rating = $request->rating;
        $menu->image = $imagePath;
        $menu->save();

        return redirect()->route('admin.menus.index')->with('success', 'Menu Record Added Successfully');
    }

    public function editMenu($id)
    {
        $menu = MenuModel::findOrFail($id);

        return view('backend.menumanagement-edit', compact('menu'));
    }

    public function updateMenu(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'category' => 'required|min:3',
            'price' => 'required|numeric|min:0',
            'rating' => 'required|integer|min:0|max:5',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $menu = MenuModel::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $this->uploadImage($request->file('image'));
            $menu->image = $imagePath;
        }

        $menu->name = $request->name;
        $menu->category = $request->category;
        $menu->price = $request->price;
        $menu->rating = $request->rating;
        $menu->save();

        return redirect()->route('admin.menus.index')->with('success', 'Menu Record Updated Successfully');
    }

    public function deleteMenu($id)
    {
        $menu = MenuModel::findOrFail($id);
        $menu->delete();

        return redirect()->route('admin.menus.index')->with('success', 'Menu Record Deleted Successfully');
    }

    private function uploadImage($image)
    {
        $imageName = 'menu_'.time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('backend/images/menus'), $imageName);

        return 'backend/images/menus/'.$imageName;
    }
}
