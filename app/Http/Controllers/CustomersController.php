<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }  The way to add auth middleware for route

    public function index()
    {
        $customers = Customer::all();
        $companies = Company::all();

//        $activeCustomers = $customers->where('active', 1);
//        $inactiveCustomers = $customers->where('active', 0);

        return view('customers.index', compact('customers', 'companies'));
    }

    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create', compact('companies','customer'));
    }


    /**
     * Store a new customer.
     *
     * @param Request $request
     * @return Response
     */
    public function store()
    {

        Customer::create($this->validateRequest());

        return redirect('customers');
    }

    public function show(Customer $customer)
    {
//        dd($customer);
//       $customer = Customer::where('id',$customer)->firstOrFail();
        return view('customers.show', compact('customer')); // How does it work ????
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit',compact('customer','companies'));
    }
    public function update(Customer $customer)
    {
        $customer-> update($this->validateRequest());
       return redirect('/customers/'.$customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return  redirect('customers');
    }

    private function validateRequest()
    {
        return request()->validate([
            'company_id' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
        ]);
    }
}
