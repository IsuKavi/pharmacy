@extends('layouts.main_panel')

@section('content')
    <div class="container-fluid">
        <h2>CUSTOMER DETAILS</h2>
        <table class="table table-bordered table-sm" style="font-size: 12px">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>CONTACT</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $key => $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->age }}</td>
                        <td>{{ $customer->gender }}</td>
                        <td>{{ $customer->contact }}</td>
                        <td>
                            <a class="btn btn-sm btn-success mt-1" href="/updatecustomer/{{ $customer->id }}">UPDATE</a>
                            <form action="{{ route('deletecustomer', [$customer->id]) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn btn-sm btn-danger mt-1" type="submit">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
