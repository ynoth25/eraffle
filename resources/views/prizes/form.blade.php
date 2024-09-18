<!-- resources/views/prizes/_form.blade.php -->
@csrf

<div class="form-group">
    <label for="name">Prize Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $prize->name ?? '') }}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $prize->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="value">Value</label>
    <input type="text" name="value" class="form-control" value="{{ old('value', $prize->value ?? '') }}">
    @error('value')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="promo_id">Promo ID</label>
    <input type="text" name="promo_id" class="form-control" value="{{ old('promo_id', $prize->promo_id ?? '') }}">
    @error('promo_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
