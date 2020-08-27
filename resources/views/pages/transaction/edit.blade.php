@extends('layouts.default')

@section('content')
	

	<div class="card">
      <div class="card-header">
        <strong>Edit Transaksi | </strong>
        <small>{{ $item->uuid }}</small>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('transaction.update', $item->id) }}" method="post">
        	@method('PUT')
            @csrf
            <div class="form-group">
            	<label for="name" class=" form-control-label">Nama Pemesan</label>
            	<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $item->name  }}">
            	@error('name') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<label for="email" class=" form-control-label">Email</label>
            	<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ? old('email') : $item->email }}">
            	@error('email') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<label for="number" class=" form-control-label">Nomor HP</label>
            	<input type="text" name="number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') ? old('number') : $item->number }}">
            	@error('number') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<label for="address" class=" form-control-label">Alamat</label>
            	<input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') ? old('address') : $item->address }}">
            	@error('address') <div>{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
            	<button class="btn btn-primary btn-block" type="submit">Ubah Transaksi</button>
            </div>
        </form>
    </div>

</div>
@endsection