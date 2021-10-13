@extends('layouts.main_panel')

@section('content')
    <div class="container-fluid">
        <h2>ITEM DETAILS</h2>
        <table class="table table-bordered table-sm" style="font-size: 12px">
            <thead>
                <tr>
                    <th>BATCH NO</th>
                    <th>NAME</th>
                    <th>QTY</th>
                    <th>UNIT PRICE</th>
                    <th>EXP</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $key => $item)
                    <tr>
                        <th>{{ $item->batchNo }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->unitPrice }}</td>
                        <td>{{ $item->exp }}</td>
                        <td>
                            <a class="btn btn-sm btn-success" href="/updateitem/{{ $item->id }}">UPDATE</a>
                            <a class="btn btn-sm btn-danger mt-2" href="">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
