<!-- resources/views/prizes/_form.blade.php -->
@csrf

<div class="form-group">
    <label for="promo_id">Promo</label>
    <select name="promo_id" class="form-control">
        @foreach($promos as $promo)
            <option value="{{ $promo->id }}" {{ (old('promo_id', $rafflePick->promo_id ?? '') == $promo->id) ? 'selected' : '' }}>
                {{ $promo->name }}
            </option>
        @endforeach
    </select>
    @error('promo_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="entry_id">Entry</label>
    <select name="entry_id" class="form-control">
        @foreach($entries as $entry)
            <option value="{{ $entry->id }}" {{ (old('entry_id', $rafflePick->entry_id ?? '') == $entry->id) ? 'selected' : '' }}>
                {{ $entry->id }}
            </option>
        @endforeach
    </select>
    @error('entry_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="pick_date">Pick Date</label>
    <input type="date" name="pick_date" class="form-control" value="{{ old('pick_date', $rafflePick->pick_date ?? '') }}">
    @error('pick_date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="is_winner">Is Winner</label>
    <input type="checkbox" name="is_winner" value="1" {{ old('is_winner', $rafflePick->is_winner ?? false) ? 'checked' : '' }}>
    @error('is_winner')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
