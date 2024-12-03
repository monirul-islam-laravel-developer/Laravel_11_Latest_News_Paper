<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has('custommer_id')) {
            // Redirect to the customer login page if not authenticated
            return $next($request);

        }
        else
        {
            Alert::warning('Please Login Or Signup first');
            return redirect()->route('customer-login');
        }

        // Optionally, you can load the customer data here
        // $customer = Customer::find(Session::get('customer_id'));
        // $request->merge(['customer' => $customer]);


    }
}
