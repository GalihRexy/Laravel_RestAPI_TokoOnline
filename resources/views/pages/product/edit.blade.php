@extends('layouts.default')

@section('content')
	

	<div class="card">
      <div class="card-header">
        <strong>Edit Barang | </strong>
        <small>{{ $item->name }}</small>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product.update', $item->id) }}" method="post">
        	@method('PUT')
            @csrf
            <div class="form-group">
            	<label for="name" class=" form-control-label">Nama Barang</label>
            	<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $item->name  }}">
            	@error('name') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<label for="type" class=" form-control-label">Type Barang</label>
            	<input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') ? old('type') : $item->type }}">
            	@error('type') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<label for="description" class=" form-control-label">Deskripsi Barang</label>
            	<textarea name="description" class="editor form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $item->description }}</textarea>
            	@error('description') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<label for="price" class=" form-control-label">Harga Barang</label>
            	<input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') ? old('price') : $item->price }}">
            	@error('price') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<label for="quantity" class=" form-control-label">Jumlah Barang</label>
            	<input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') ? old('quantity') : $item->quantity }}">
            	@error('quantity') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<button class="btn btn-primary btn-block" type="submit">Tambah Barang</button>
            </div>
        </form>
    </div>

</div>
@endsection