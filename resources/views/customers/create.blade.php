@extends ('layouts.app')

@section('title','New Customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Customer</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{route('customers.index')}}" method="POST">
                @include ('customers.form')
                <button type="submit" class="btn btn-primary">Create Customer</button>
            </form>
        </div>
    </div>
    </div>

@endsection