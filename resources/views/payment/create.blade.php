@extends('layouts.app')

@section('content')
    <div>
        <form action="{{ route('payment.store') }}" method="post">
            @csrf

            <input type="submit" value="Pay">

        </form>
    </div>
@endsection