@foreach ($cars as $car)

  {{$car -> car_id}} <br/>
  {{$car -> marca}} <br/>
  {{$car -> cambio}} <br/>
  {{$car -> carburante}} <br/> <br/>


@endforeach
