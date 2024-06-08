@extends('layout')

@section('content')
    <h2>Customer Details</h2>
    <p>Name: {{ $customer->name }}</p>
    <p>Email: {{ $customer->email }}</p>
    <p>Phone: {{ $customer->phone }}</p>
    <p>Address: {{ $customer->address }}</p>
    <a href="{{ route('customers.index') }}">Back</a>
@endsection
