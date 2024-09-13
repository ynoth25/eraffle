<!-- resources/views/prizes/_form.blade.php -->
@csrf

<div class="form-group">
    <label for="entry_id">Entry</label>
    <select name="entry_id" class="form-control">
        @foreach($entries as $entry)
            <option value="{{ $entry->id }}" {{ (old('entry_id', $validation->entry_id ?? '') == $entry->id) ? 'selected' : '' }}>
                {{ $entry->id }}
            </option>
        @endforeach
    </select>
    @error('entry_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="validated_by">Validated By</label>
    <select name="validated_by" class="form-control">
        @foreach($admins as $admin)
            <option value="{{ $admin->id }}" {{ (old('validated_by', $validation->validated_by ?? '') == $admin->id) ? 'selected' : '' }}>
                {{ $admin->name }}
            </option>
        @endforeach
    </select>
    @error('validated_by')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="validation_code">Validation Code</label>
    <input type="text" name="validation_code" class="form-control" value="{{ old('validation_code', $validation->validation_code ?? '') }}">
    @error('validation_code')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="validation_status">Validation Status</label>
    <input type="text" name="validation_status" class="form-control" value="{{ old('validation_status', $validation->validation_status ?? '') }}">
    @error('validation_status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="comments">Comments</label>
    <textarea name="comments" class="form-control">{{ old('comments', $validation->comments ?? '') }}</textarea>
    @error('comments')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="validation_date">Validation Date</label>
    <input type="date" name="validation_date" class="form-control" value="{{ old('validation_date', $validation->validation_date ?? '') }}">
    @error('validation_date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
