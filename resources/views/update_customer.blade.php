@extends('layouts.main_panel')

@section('content')
    <div class="container-fluid">
        <h2>UPDATE CUSTOMER</h2>
        <form action="{{ route('updatecustomer', [$customer->id]) }}" method="POST">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Customer Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}">
            </div>
            <div class="form-group">
                <label for="age">Customer Age</label>
                <input type="number" name="age" id="age" class="form-control" value="{{ $customer->age }}">
            </div>
            <div class="form-group">
                <label for="gender">Select Gender</label>
                <select name="gender" id="gender" class="form-control" value="{{ $customer->gender }}">
                    <option value="male" {{ $customer->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $customer->gender == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="contact">Customer Contact Number</label>
                <input type="tel" name="contact" id="contact" class="form-control" value="{{ $customer->contact }}">
            </div>
            <button type="submit" class="btn btn-success">
                UPDATE CUSTOMER
            </button>
        </form>
    </div>
@endsection
