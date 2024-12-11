@extends('client.layout')

@section('konten')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">{{ $project->title }}</h2>
    <p><strong>Budget:</strong> {{ $project->budget }}</p>
    <p><strong>Deadline:</strong> {{ $project->deadline }}</p>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    <p><strong>Status:</strong> {{ $project->status }}</p>
    <p><strong>Detail File:</strong> <a href="{{ asset('storage/' . $project->detail) }}" target="_blank">Download</a></p>
    <a href="{{ route('client.project') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded">Back to Projects</a>
</div>
@endsection