@foreach (request()->all() as $key => $value)

@continue($exclide === $key)

@if (is_array($value))
    @foreach ($value as $subitem)
        <input type="hidden" name="{{$key}}[]" value="{{$subitem}}">
    @endforeach
@else
    <input type="hidden" name="{{$key}}" value="{{$value}}">
@endif
@endforeach
