@extends('layouts.main_panel')

@section('content')
    <div class="container-fluid">
        <h2>ADD ITEM</h2>
        <form action="{{ route('additem') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="batchNo">Batch No</label>
                <input type="text" name="batchNo" id="batchNo" class="form-control" value="{{ old('batchNo') }}">
            </div>
            <div class="form-group">
                <label for="name">Item Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="qty">Item Quantity</label>
                <input type="text" name="qty" id="qty" class="form-control" value="{{ old('qty') }}">
            </div>
            <div class="form-group">
                <label for="unitPrice">Item Unit Price</label>
                <input type="text" name="unitPrice" id="unitPrice" class="form-control" value="{{ old('unitPrice') }}">
            </div>
            <div class="form-group">
                <label for="exp">Item Expiration Date</label>
                <input type="date" name="exp" id="exp" class="form-control" value="{{ old('exp') }}">
            </div>
            <button type="submit" class="btn btn-primary">
                ADD ITEM
            </button>
        </form>
    </div>
@endsection
