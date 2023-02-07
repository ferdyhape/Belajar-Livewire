<div class="col-lg-4 col-md-5 col-sm-6 col-8 card p-2" style="">
    <p class="h3 text-center my-3">
        Belajar Livewire
    </p>
    <img src="{{ asset('assets/img/calculateillustration.png') }}" class="card-img-top" alt="">
    <div class="card-body">
        <div class="input-group">
            <input type="number" wire:model="oldInput" aria-label="Input Number" class="form-control"
                placeholder="Number">
            <input type="number" wire:model="newInput" aria-label="Input Number" class="form-control"
                placeholder="Number">
        </div>
        <div class="d-flex justify-content-between my-3">
            <button class="btn btn-primary" wire:click="plus"><i class="fa-solid fa-plus"></i></button>
            <button class="btn btn-primary" wire:click="min"><i class="fa-solid fa-minus"></i></button>
            <button class="btn btn-primary" wire:click="multiply"><i class="fa-solid fa-xmark"></i></button>
            <button class="btn btn-primary" wire:click="divide"><i class="fa-solid fa-divide"></i></button>
        </div>
        <div class="bg-light p-2">Result: {{ $result }}</div>
    </div>
</div>