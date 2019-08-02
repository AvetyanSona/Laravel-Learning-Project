@extends ('layouts.app')

@section('title','Details for '. $customer->name )

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Details for {{$customer->name}} </h1>
            <p><a href="{{route('customers.edit',['customer'=>$customer->id])}}">Edit Details</a></p>
            <form action="{{route('customers.destroy',['customer'=>$customer->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Customer</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p><strong>Name:</strong> {{$customer->name}}</p>
            <p><strong>Email:</strong> {{$customer->email}}</p>
            <p><strong>Company:</strong> {{$customer->company->name}}</p>
        </div>
    </div>
@endsection