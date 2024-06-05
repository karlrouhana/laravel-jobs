<x-layout>
    <x-page-heading>Companies</x-page-heading>

    @foreach($emp as $company)
        <x-panel class="mt-6 flex items-center space-x-2 justify-between">
            <div class="flex items-center space-x-2">
                <div>
                    <x-employer-logo :employer="$company" width=42></x-employer-logo>
                </div>
                <div class="group-hover:text-blue-600 transition-colors duration-300">
                    {{ $company->name }}
                </div>
            </div>

            <div>
                <a href="/companies/{{$company->id}}">
                    @if($company->jobs()->count() === 1)
                        <h1>{{ $company->jobs()->count() }} Job</h1>
                    @else
                        <h1>{{ $company->jobs()->count() }} Jobs</h1>
                    @endif
                </a>
            </div>
        </x-panel>
    @endforeach
</x-layout>
