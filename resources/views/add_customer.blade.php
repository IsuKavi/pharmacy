@extends('layouts.main_panel')

@section('content')
    <div class="container-fluid">
        <h2>ADD NEW CUSTOMER</h2>
        <form action="{{ route('addcustomer') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Customer Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="age">Customer Age</label>
                <input type="number" name="age" id="age" class="form-control" value="{{ old('age') }}">
            </div>
            <div class="form-group">
                <label for="gender">Select Gender</label>
                <select name="gender" id="gender" class="form-control" value="{{ old('gender') }}">
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="contact">Customer Contact Number</label>
                <input type="tel" name="contact" id="contact" class="form-control" value="{{ old('contact') }}">
            </div>
            <div class="form-group">
                <label for="address">Customer Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
            </div>
            <button type="submit" class="btn btn-primary">
                ADD CUSTOMER
            </button>
        </form>
    </div>
@endsection
