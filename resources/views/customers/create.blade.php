@extends('layout')

@section('content')
    <h2>Add New Customer</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>
        <label for="address">Address:</label>
        <textarea name="address" required></textarea>
        <button type="submit">Save</button>
    </form>
@endsection
