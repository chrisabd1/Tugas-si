@extends('layout')

@section('content')
    <h2>Edit Customer</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $customer->name }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $customer->email }}" required>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ $customer->phone }}" required>
        <label for="address">Address:</label>
        <textarea name="address" required>{{ $customer->address }}</textarea>
        <button type="submit">Save</button>
    </form>
@endsection
