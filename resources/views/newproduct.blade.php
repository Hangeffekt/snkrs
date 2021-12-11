<form action="{{ route('user.wtsstore') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="Brand">Brand</label>
        <select class="form-control" name="brand"">
            <option>Válassz!</option>
            @foreach($Brands as $Brand)
                <option value="{{ $Brand->name }}">{{ $Brand->name }}</option>
            @endforeach
        </select>
        <span class="text-danger">@error('brand'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="Type">Type</label>
        <input type="text" class="form-control" name="type" id="" value="{{ old('type') }}">
        <span class="text-danger">@error('type'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="Price">Price</label>
        <input type="text" class="form-control" name="price" id="" value="{{ old('price') }}">
        <span class="text-danger">@error('price'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="Size">Size</label>
        <input type="text" class="form-control" name="size" id="" value="{{ old('size') }}">
        <span class="text-danger">@error('size'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="Condition">Condition</label>
        <input type="text" class="form-control" name="condition" id="" value="{{ old('condition') }}">
        <span class="text-danger">@error('condition'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="Action">Action</label>
        <select class="form-control" name="post"">
            <option>Válassz!</option>
            @foreach($Posts as $Post)
                <option value="{{ $Post->name }}">{{ $Post->name }}</option>
            @endforeach
        </select>
        <span class="text-danger">@error('post'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <button class="btn btn-block btn-success" type="submit">Mentés</button>
    </div>
</form>