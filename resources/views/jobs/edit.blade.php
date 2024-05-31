<x-layout>
    <x-page-heading>Edit</x-page-heading>

    <x-forms.form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <x-forms.input label="Title" name="title" value="{{ $job->title }}"/>
        <x-forms.input label="Salary" name="salary" value="{{ $job->salary }}" />
        <x-forms.input label="Location" name="location" value="{{ $job->location }}" />

        <x-forms.select label="Schedule" name="schedule" value="{{ $job->schedule }}">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" value="{{ $job->url }}" />
        <x-forms.checkbox Label="Feature (Costs Extra)" name="featured" value="{{ $job->featured }}"/>

        <x-forms.divider />

        @php
            $att = '';
            $counter = 0;
            foreach($job->tags as $tag){
                if($counter == sizeof($job->tags)-1){
                    $att .= $tag->name;
                }
                else{
                    $att .= $tag->name .',';
                }
                $counter++;
            }

        @endphp

        <x-forms.input label="Tags (comma separated)" name="tags" value="{{$att}}"/>

        <div class="flex items-center justify-between">
            <button class="rounded-lg py-2 px-6 font-bold bg-red-600" form="delete-form">Delete</button>
            <div class="flex space-x-6 items-center">
                <a href="/jobs/{{$job->id}}" type="button">Cancel</a>
                <x-forms.button>Update</x-forms.button>
            </div>
        </div>
    </x-forms.form>

    <form action="/jobs/{{ $job->id }}" method="POST" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
