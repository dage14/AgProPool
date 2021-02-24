@extends('layouts.app')

@section('content')


<p>
    <a href="/farmers/create" class="btn btn-primary">New Farmer</a>
</p>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Village</th>
            <th>Phone</th>
        </tr>
    </thead>
     <tbody>
         @foreach($farmers as $farmer)
         <tr >
            <td>{{ $farmer->name }}</td>
            <td>{{ $farmer->gender }}</td>
            <td>{{ $farmer->age }}</td>
            <td>{{ $farmer->village }}</td>
            <td>{{ $farmer->phone }}</td>
         </tr>
         @endforeach
     </tbody>
</table>
@endsection