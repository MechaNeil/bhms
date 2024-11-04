<div class="{{ $show ? 'd-block' : 'd-none' }}">
    {{-- The whole world belongs to you. --}}
    <div>

        <div class="m-3 position-absolute card p-4 pt-2 pb-2 bg-body results-container">
            {{-- <div class="position-absolute top-0 end-0 pt-1 pe-3"><button class="btn-close"
                    wire:click="dispatch('search:clear-results')"></button></div> --}}

            @if (count($results) == 0)

            <a>No results found</a>

            @endif

            @foreach($results as $result)

            <div class="pt-1" wire:key='{{ $result->id }}'>
                <a class="p-1" wire:navigate href="/article/{{ $result->id }}">{{ $result->title }}</a></div>

            @endforeach
        </div>
    </div>

</div>