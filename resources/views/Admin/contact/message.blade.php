@extends('layouts.admin')


@section('title')
Admin | Messages
@endsection


@section('content')
    <div class="container">
        <h1>Messages</h1>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages->sortBy('id') as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>
                        <td>
                            <a href="mailto:{{ $message->email }}" class="btn btn-primary">Répondre</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
