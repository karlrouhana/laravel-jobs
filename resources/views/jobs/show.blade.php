<x-layout>
    <x-page-heading>{{$job->title}}</x-page-heading>

    <x-job-card-wide :$job></x-job-card-wide>

    @can('edit', $job)
        <p class="mt-6">
            <a class="rounded-lg py-2 px-6 font-bold bg-blue-800" href="/jobs/{{ $job->id }}/edit">Edit</a>
        </p>
    @endcan
</x-layout>
