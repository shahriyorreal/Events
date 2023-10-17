@extends('layouts.frontend')

@section('content')

<div>
    <h2>Events</h2>
</div>
    
<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Creator</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events  as $item)
                <tr> 
                    <td>{{$item->title}}</td>
                    <td>{{$item->text}}</td>
                    <td>{{$item->creator }}</td>
                </tr>
            </tbody>
        </table>
    </div>