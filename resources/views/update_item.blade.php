@extends('layouts.main_panel')

@section('content')
    <div class="container-fluid">
        <h2>UPDATE ITEM</h2>
        <form action="{{ route('updateitem', [$item->id]) }}" method="POST">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="batchNo">Batch No</label>
                <input type="text" name="batchNo" id="batchNo" class="form-control" value="{{ $item->batchNo }}">
            </div>
            <div class="form-group">
                <label for="name">Item Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}">
            </div>
            <div class="form-group">
                <label for="qty">Item Quantity</label>
                <input type="text" name="qty" id="qty" class="form-control" value="{{ $item->qty }}">
            </div>
            <div class="form-group">
                <label for="unitPrice">Item Unit Price</label>
                <input type="text" name="unitPrice" id="unitPrice" class="form-control" value="{{ $item->unitPrice }}">
            </div>
            <div class="form-group">
                <label for="exp">Item Expiration Date</label>
                <input type="date" name="exp" id="exp" class="form-control" value="{{ $item->exp }}">
            </div>
            <button type="submit" class="btn btn-success">
                UPDATE ITEM
            </button>
        </form>
    </div>
@endsection
