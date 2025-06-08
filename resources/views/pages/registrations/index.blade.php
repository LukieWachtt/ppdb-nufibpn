@if (session()->has('success'))
<p style="color: green;">{{ session()->get('success') }}</p>
@endif
<h2>You have {{ $registrations->count() }} registration{{ $registrations->count() != 1 ? 's' : '' }}</h2>
@php
    $count = 0;
@endphp
@foreach ($registrations as $registration)
    <p>{{ ++$count }}. {{ $registration->nama }} (<a href="{{ route('registrations.show', $registration) }}">View</a>, <a href>Edit</a>, <a href>Delete</a>)</p>
@endforeach