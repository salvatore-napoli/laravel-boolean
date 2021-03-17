@foreach ($cars as $car)
  @if ($car->id == $id)
    {{$car}}
  @elseif (empty($id))
    {{$car}} <br />
  @endif
@endforeach
