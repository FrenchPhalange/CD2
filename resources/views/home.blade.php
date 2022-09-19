@extends('layouts.app')

@section('content')
<div class="container">
    <h2> Ma lsite : </h2>

    @forelse($students as $student)
    @if($loop->first)
    <li> {{ student }} </li>
</div>