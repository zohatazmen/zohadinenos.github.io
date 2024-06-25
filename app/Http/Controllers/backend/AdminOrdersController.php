<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Orders;
use Illuminate\Http\Request;

class AdminOrdersController extends Controller
{
    public function index()
    {
        return view('backend.orders', ['order' => Orders::get()]);
    }

    public function addorder()
    {
        return view('backend.order-add');
    }

    public function submitorderRecord(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'title' => 'required|min:3',
                'details' => 'required|min:10',
                'link' => 'required|min:3',
                'category' => 'required|min:3',
                'technology' => 'required|min:3',
                'client' => 'required|min:3',
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            ]
        );
        $order_STATUS = 1;
        $ImageName = 'b4f_order_'.time().'.'.$request->image->extension();
        $request->image->move(public_path('backend/images/orders'), $ImageName);
        // dd($ImageName);
        $orders = new Orders();
        $orders->title = $request->title;
        $orders->details = $request->details;
        $orders->link = $request->link;
        $orders->category = $request->category;
        $orders->technology = $request->technology;
        $orders->client = $request->client;
        $orders->image = $ImageName;
        $orders->status = $order_STATUS;
        $orders->save();

        return back()->withSuccess('order Record Added Successfully');
    }

    public function editorder($id)
    {
        // dd($id);
        $orders = orders::where('id', $id)->first();

        return view('backend.order-edit', ['order' => $orders]);
    }

    public function updateorder(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required|min:3',
                'details' => 'required|min:10',
                'link' => 'required|min:3',
                'category' => 'required|min:3',
                'technology' => 'required|min:3',
                'client' => 'required|min:3',
                'image' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]
        );

        $team = orders::where('id', $id)->first();
        $order_STATUS = 1;
        if (isset($request->image)) {
            $ImageName = 'fs_team_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('backend/images/orders'), $ImageName);
            $team->image = $ImageName;
        }
        $team->title = $request->title;
        $team->details = $request->details;
        $team->link = $request->link;
        $team->category = $request->category;
        $team->technology = $request->technology;
        $team->client = $request->client;
        $team->status = $order_STATUS;
        $team->save();

        return back()->withSuccess('order Record Updated Successfully');
    }

    public function deleteorder($id)
    {
        $order = orders::where('id', $id)->first();
        $order->delete();

        return back()->withSuccess('Member Record Deleted Successfully');
    }

    // public function showTeamMember($id)
    // {
    //     $team = orders::where('id', $id)->first();
    //     return view('backend.team-member-details', ['team' => $team]);
    // }
}
