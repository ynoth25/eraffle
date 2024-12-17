<!-- resources/views/faqs/form.blade.php -->
@csrf
@if (isset($faq))
    @method('PUT')
@endif

<div class="form-group">
    <label for="promo_id">Promo</label>
    <select name="promo_id" class="form-control">
        @foreach ($promos as $promo)
            <option value="{{ $promo->id }}"
                {{ old('promo_id', $faq->promo_id ?? '') == $promo->id ? 'selected' : '' }}>
                {{ $promo->name }}
            </option>
        @endforeach
    </select>
    @error('promo_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="question">Question</label>
    <input type="text" name="question" class="form-control" value="{{ old('question', $faq->question ?? '') }}">
    @error('question')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="answer">Answer</label>
    <textarea name="answer" class="form-control">{{ old('answer', $faq->answer ?? '') }}</textarea>
    @error('answer')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">
    {{ isset($faq) ? 'Update FAQ' : 'Create FAQ' }}
</button>
