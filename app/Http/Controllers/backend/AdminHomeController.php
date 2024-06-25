<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdminContact;
use App\Models\Backend\Admins;
use App\Models\Backend\FAQs; 
use App\Models\Backend\MenuModel;
use App\Models\backend\Orders;
use App\Models\backend\Projects;
use App\Models\backend\ReservationFormModel;
use App\Models\Backend\Team; 
use Illuminate\Http\Request; 

class AdminHomeController extends Controller
{
    
    public function index()
    {
        if (session()->has('email')) {
            $totalAdmins = Admins::count();
            $totalTeams = Team::count();
            $totalOrders = Orders::count();
            $totalProjects = Projects::count();
            $totalReservations = ReservationFormModel::count();
            $totalFaqs = FAQs::count();
            $totalMenus = MenuModel::count();
            $totalContacts = AdminContact::count();

            return view('backend.index', compact(
                'totalAdmins',
                'totalTeams',
                'totalOrders',
                'totalProjects',
                'totalReservations',
                'totalFaqs',
                'totalMenus',
                'totalContacts'
            ));
        } else {
            return view('backend.login'); // Redirect to login if session does not exist
        }
    }

    /**
     * Show the form for creating a new admin.
     */
    public function registerAdmin()
    {
        $url = url('/admin/register');

        return view('backend.admin-add', compact('url'));
    }

    /**
     * Store a newly created admin record in storage.
     */
    public function submitAdminRecord(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'contact' => 'required',
        ]);

        $admin = new Admins();
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->email = $request->input('email');
        $admin->password = bcrypt($request->input('password')); // Ensure to hash the password
        $admin->contact = $request->input('contact');
        $admin->status = 1; // Assuming you want to set the admin as active by default
        $admin->save();

        return redirect('/admin/admins-list')->with('success', 'Admin added successfully');
    }

    /**
     * Display a listing of the admins.
     */
    public function showAdminRecord()
    {
        $admins = Admins::all();

        return view('backend.admins-list', compact('admins'));
    }

    /**
     * Remove the specified admin from storage.
     */
    public function deleteAdminRecord($id)
    {
        $admin = Admins::find($id);
        if ($admin) {
            $admin->delete();

            return redirect('/admin/admins-list')->with('success', 'Admin deleted successfully');
        }

        return redirect('/admin/admins-list')->with('error', 'Admin not found');
    }

    /**
     * Show the form for editing the specified admin.
     */
    public function editAdminRecord($id)
    {
        $admin = Admins::find($id);
        if ($admin) {
            $url = url('/admin/update').'/'.$id;

            return view('backend.admin-add', compact('admin', 'url'));
        }

        return redirect('/admin/admins-list')->with('error', 'Admin not found');
    }

    /**
     * Update the specified admin in storage.
     */
    public function updateAdminRecord(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:admins,email,'.$id,
            'contact' => 'required',
        ]);

        $admin = Admins::find($id);
        if ($admin) {
            $admin->first_name = $request->input('first_name');
            $admin->last_name = $request->input('last_name');
            $admin->email = $request->input('email');
            $admin->contact = $request->input('contact');
            $admin->save();

            return redirect('/admin/admins-list')->with('success', 'Admin updated successfully');
        }

        return redirect('/admin/admins-list')->with('error', 'Admin not found');
    }
}