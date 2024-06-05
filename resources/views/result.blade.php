
<x-layout>
    @if(sizeof($jobs) === 0)
        <x-page-heading>No Results Found!</x-page-heading>
    @else
        <x-page-heading>Results</x-page-heading>
    @endif
    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-job-card-wide :$job></x-job-card-wide>
        @endforeach
    </div>
</x-layout>
