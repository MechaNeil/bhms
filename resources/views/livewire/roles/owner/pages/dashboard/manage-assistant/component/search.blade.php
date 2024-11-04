<div>
    <!-- /.container-fluid -->
    <form>

        <div class="mt-2 ms-3 me-4">
            {{-- wire modifier live, debounce.1000s, change, blur, fill --}}
            <input type="text" class="form-control" 
                   wire:model.live.debounce='searchText'
                   placeholder="{{ $placeholder }}">
        </div>


    </form>

    <livewire:roles.owner.pages.dashboard.manage-assistant.component.search-results placeholder="Type something to word" :results=$results :show="!empty($searchText)">



</div>