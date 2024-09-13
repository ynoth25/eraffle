<form action="{{ isset($promo) ? route('promos.update', $promo->id) : route('promos.store') }}" method="POST">
    @csrf
    @if(isset($promo))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="name">Promo Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $promo->name ?? '') }}" required>
        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control" required>{{ old('description', $promo->description ?? '') }}</textarea>
        @error('description') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <div class="form-group">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $promo->start_date ?? '') }}" required>
        @error('start_date') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <div class="form-group">
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', $promo->end_date ?? '') }}" required>
        @error('end_date') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <div class="form-group">
        <label for="terms_and_conditions">Terms and Conditions:</label>
        <textarea name="terms_and_conditions" id="terms_and_conditions" class="form-control" required>{{ old('terms_and_conditions', $promo->terms_and_conditions ?? '') }}</textarea>
        @error('terms_and_conditions') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <button type="submit" class="btn btn-success">{{ isset($promo) ? 'Update Promo' : 'Create Promo' }}</button>
</form>
