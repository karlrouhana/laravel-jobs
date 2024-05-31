@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">

            <a href="/jobs/{{ $job->id}}">
                {{ $job->title }}
            </a>

        </h3>
        <p class="mt-4 text-sm">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>


    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag size="small" :$tag></x-tag>
            @endforeach
        </div>

        <x-employer-logo :employer="$job->employer" :width='42'></x-employer-logo>
    </div>
</x-panel>
