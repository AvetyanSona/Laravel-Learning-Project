@csrf
<div class="form-group">
    <label for="name">Customer name</label>
    <input id="name" type="text" name="name" value="{{old('name')?? $customer->name}}"
           class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="email">Customer Email</label>
    <input id="email" type="text" name="email" value="{{old('email')?? $customer->email}}"
           class="form-control @error('email') is-invalid @enderror">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="company_id">Company Name</label>
    <select name="company_id" id="company_id" class="form-control">
        <option value="" disabled>Select Company Name</option>
        @foreach($companies as $company)
            <option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected' : ''}}>{{$company->name}}</option>
        @endforeach
    </select>
    @error('company')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="active">Status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select Customer Status</option>

{{--        @php dd($customer->activeOptions()) @endphp--}}
{{--        @foreach($customer->activeOptions() as $activeOptionKey =>$activeOptionValue  )--}}

        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' : ''}} >{{$activeOptionValue}}</option>

        @endforeach
{{--        <option value="1" {{$customer->active == 'Active' ? 'selected' : ''}}>Active</option>--}}
{{--        <option value="0" {{$customer->active == 'Inactive' ? 'selected' : ''}}>Inactive</option>--}}
    </select>
    @error('active')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>