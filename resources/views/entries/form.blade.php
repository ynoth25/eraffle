<!-- resources/views/entries/form.blade.php -->
@csrf
@if(isset($entry))
    @method('PUT')
@endif

<div class="form-group">
    <label for="user_id">User</label>
    <select name="user_id" class="form-control">
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ (old('user_id', $entry->user_id ?? '') == $user->id) ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach
    </select>
    @error('user_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="promo_id">Promo</label>
    <select name="promo_id" class="form-control">
        @foreach($promos as $promo)
            <option value="{{ $promo->id }}" {{ (old('promo_id', $entry->promo_id ?? '') == $promo->id) ? 'selected' : '' }}>
                {{ $promo->name }}
            </option>
        @endforeach
    </select>
    @error('promo_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="submission_date">Submission Date</label>
    <input type="date" name="submission_date" class="form-control" value="{{ old('submission_date', $entry->submission_date ?? '') }}">
    @error('submission_date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="status">Status</label>
    <input type="text" name="status" class="form-control" value="{{ old('status', $entry->status ?? '') }}">
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">
    {{ isset($entry) ? 'Update Entry' : 'Create Entry' }}
</button>
