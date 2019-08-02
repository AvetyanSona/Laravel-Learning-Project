@extends ('layouts.app')

@section('title','Contact Us')

@section('content')
    <h1>Contact Us</h1>

    @if(!session()->has('message'))
        <form action="/contact" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{old('name')}}"
                       class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="text" name="email" value="{{old('email')}}"
                       class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" value="{{old('message')}}" cols="30" rows="10"
                          class="form-control @error('email') is-invalid @enderror"></textarea>
                @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    @endif

@endsection