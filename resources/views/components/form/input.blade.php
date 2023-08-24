
      <div class="col-md-6">
        <div class="form-group">
          <label>{{ $label}}:</label>
          <input type="{{$type}}" {{ $attributes->merge(['class'=>'form-control']) }} name="{{ $name }}" />
        </div>
        <!-- /.form-group -->
      </div>
