<div class="mt-5 container">
    <form wire:submit="save">
        <div class="col-md-6">
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" wire:model='title' id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Title</label>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="number" wire:model='stock' id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Stock</label>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="number" wire:model='price' id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Price</label>
            </div>

            <div data-mdb-input-init class=" mb-4">
                <label class="form-label" for="form1Example1">Photo</label>
                <input type="file" wire:model='photo' class="form-control" id="customFile" />
            </div>

            <div data-mdb-input-init class=" mb-4">
            <label class="form-label" for="form1Example1">Color</label>
                <select class="form-select" wire:model='color' aria-label="Default select example">
                    <option>Pilih</option>
                    <option value="White">White</option>
                    <option value="Red">Red</option>
                    <option value="Green">Green</option>
                </select>
            </div>

            <div data-mdb-input-init class=" mb-4">
            <label class="form-label" for="form1Example1">Size</label>
                <select class="form-select" wire:model='size' aria-label="Default select example">
                    <option>Pilih</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
             <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Save</button>
            </div>

        </div>
    </form>
</div>
