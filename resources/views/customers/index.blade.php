@extends ('layouts.app')

@section('title','Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
            <p><a href="{{ route('customers.create')}}">Add New Customer</a></p>
        </div>
    </div>

    @foreach($customers as $customer)
        <div class="row">
            <div class="col-2">
                {{$customer->id}}
            </div>
            <div class="col-4">
                <a href="{{route('customers.show',['customer' => $customer->id])}}">{{$customer->name}}</a>
            </div>
            <div class="col-4">
                {{$customer->company->name}}
            </div>
            <div class="col-2">
                {{$customer->active}}
            </div>
        </div>
    @endforeach




{{--    <div class="row">--}}
{{--        <div class="col-6">--}}
{{--            <h6 class="text-center">Active Customers</h6>--}}
{{--            <ul class=" list-group">--}}
{{--                @foreach($activeCustomers as $activeCustomer)--}}
{{--                    <li class="list-group-item">{{$activeCustomer->name}}<span class="text-muted"> [{{$activeCustomer->email}}]</span>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="col-6">--}}
{{--            <h6 class="text-center">Inactive Customers</h6>--}}
{{--            <ul class="list-group">--}}
{{--                @foreach($inactiveCustomers as $inactiveCustomer)--}}
{{--                    <li class="list-group-item">{{$inactiveCustomer->name}}<span class="text-muted"> [{{$inactiveCustomer->email}}]</span>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="col-6 ">--}}
{{--            @foreach($companies as $company)--}}
{{--                @php dd($companies) @endphp--}}
{{--                <h6 class="py-3">{{$company->name}}</h6>--}}
{{--                <ul class="list-group">--}}
{{--                    @foreach($company->customers as $customer)--}}
{{--                        <li class="list-group-item">{{$customer->name}}<span--}}
{{--                                    class="text-muted"> [{{$customer->email}}] </span></li>--}}
{{--                    @endforeach--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection