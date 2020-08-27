@extends('layouts.default')

@section('content')
	

	<div class="card">
      <div class="card-header">
        <strong>Tambah Foto Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product-gallery.store') }}" method="post" enctype="multipart/form-data">
        	@csrf
            <div class="form-group">
            	<label for="name" class=" form-control-label">Nama Barang</label>
                <br>
                <select name="product_id" class=" form-control @error('product_id') is-invalid @enderror">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            	@error('name') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<label for="photo" class=" form-control-label">Foto Barang</label>
            	<input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo') }}" accept="image/*">
            	@error('photo') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label class=" form-control-label">Jadikan Default</label>
            	<div class="form-check">
                  <input class="form-check-input" type="radio" name="is_default" id="ya" value="1">
                  <label class="form-check-label" for="ya">
                    Ya
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="is_default" id="tidak" value="0">
                  <label class="form-check-label" for="tidak">
                    Tidak
                  </label>
                </div>
            	@error('is_default') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<button class="btn btn-primary btn-block" type="submit">Tambah Foto Barang</button>
            </div>
        </form>
    </div>

</div>
@endsection


