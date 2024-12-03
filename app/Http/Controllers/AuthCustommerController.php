<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Auth;

class AuthCustommerController extends Controller
{
    private $customer;
    public function index()
    {
        return view('front.custommer.register');
    }
    public function login()
    {
        return view('front.custommer.login');
    }
    public function dashboard()
    {
        return view('front.custommer.dashboard');
    }
    public function storeCustomer(Request $request)
    {
        Customer::storeCustomer($request);
        Alert::success('Accaunt Create Successfully','');
        return redirect('/customer-dashboard');
    }
    public function profile()
    {
        $customerId = Session::get('custommer_id');
        $customer = Customer::find($customerId);
        return view('front.custommer.profile', compact('customer'));

    }
    public function logincheck(Request $request)
    {
        $validatedData = $request->validate([
            'identifier' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Check if the identifier is an email or phone number
        $identifier = $validatedData['identifier'];
        $customer = null;

        if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
            // Identifier is an email
            $customer = Customer::where('email', $identifier)->first();
        } else {
            // Identifier is assumed to be a phone number
            $customer = Customer::where('number', $identifier)->first();
        }

        // Check if the customer exists and the password matches
        if ($customer && Hash::check($validatedData['password'], $customer->password)) {
            // Store customer information in the session
            Session::put('custommer_id', $customer->id);
            Session::put('custommer_name', $customer->name);

            // Redirect to the customer dashboard or another appropriate page
            Alert::success('Accaunt Login Successfully','');
            return redirect('/customer-dashboard');
        } else {
            // Return back with an error if the credentials are incorrect
            Alert::Error('Your Number/Email Or Password Does Not Match','');
            return redirect()->back();
        }

    }
    public function updateCustomer(Request $request)
    {
        Customer::customerUpdate($request);
//        dd($request->all());

        Alert::success('Your Account Information Updated Successfully','');
        return redirect()->back();
    }

    public function customerLogout()
    {
        Session::forget('custommer_id');
        Session::forget('custommer_name');
        Alert::Success('Your Accaunt LogOut Successfully');
        return redirect('/');
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required', // Current password
            'new_password' => 'required|min:8|confirmed', // New password
        ]);

        $customer = Customer::where('id', Session::get('custommer_id'))->first();

        if (Hash::check($request->password, $customer->password))
        {
            $customer->password = Hash::make($request->new_password);
            $customer->save();
            Alert::Success('Password changed successfully');
            return redirect('/customer-profile');
        }
        else
        {
            Alert::Error('Password does not match');
            return redirect('/customer-profile');
        }
    }




}
