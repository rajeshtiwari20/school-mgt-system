
<div class="form-group">
  <label for="usr">{{ $label}}:</label>
  <input type="{{$type}}" {{ $attributes->merge(['class'=>'form-control']) }} name="{{ $name }}" />
</div>
