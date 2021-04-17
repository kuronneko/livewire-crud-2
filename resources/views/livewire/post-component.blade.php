<div>

    <div class="row justify-content-center">
        <div class="col-md-3">
            @include("livewire.$view")
        </div>
        <div class="col-md-9">
            @include('livewire.table')
        </div>
    </div>

    @push('scripts')
        <script>
            Livewire.restart();
        </script>
    @endpush
</div>
