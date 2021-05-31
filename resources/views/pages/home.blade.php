@extends('layouts.main-layout')

@section('content')
    <main>
    
        <ul>
            @foreach ($employees as $employee)
                <li>
                    {{ $employee -> firstname }}
                    {{ $employee -> lastname }}
                    <br>
                    @foreach ($employee -> tasks as $task)
                        <div>{{ strtoupper($task -> title) }}</div>
                        <div>{{ $task -> description }}</div>
                    @endforeach
                </li>
            @endforeach
        </ul>
        
    </main>
@endsection