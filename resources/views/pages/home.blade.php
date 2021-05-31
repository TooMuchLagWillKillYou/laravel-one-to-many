@extends('layouts.main-layout')

@section('content')
    <main>   

        @foreach ($employees as $employee)
            @if (count($employee -> tasks) > 0)
            
            <div class="employee">
                <h2>{{ $employee -> firstname }} {{ $employee -> lastname }}</h2>
                
                @foreach ($employee -> tasks as $task)
                <div class="tasks">
                    <div class="title">{{ strtoupper($task -> title) }}</div>
                    <div class="description">{{ $task -> description }}</div>
                </div>
                @endforeach
            </div>
            
            @endif
        @endforeach

    </main>
@endsection