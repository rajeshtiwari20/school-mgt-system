<!-- /.form-group -->
<div class="col-md-6">
        <div class="form-group">
            <label>{{ $label}}:</label>
            <select class="form-control select2" name="{{ $name }}">
            <option value="">-Please Select-</option>
                @if($options)
                    @foreach($options as $key => $val)
                        <option value="{{$val}}">{{$val}}</option>
                    @endforeach
                @endif
            
            
            </select>
        </div>
</div>
<!-- /.form-group -->