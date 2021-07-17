@foreach ($trucks as $truck)
<a href="{{route('truck.edit',[$truck])}}">{{$truck->maker}} make year: {{$truck->make_year}}</a>
<span>{{$truck->mechanicOfTruck->name}} {{$truck->mechanicOfTruck->surname}}</span>
<form method="POST" action="{{route('truck.destroy', [$truck])}}">
@csrf
<button type="submit">DELETE</button>
</form>
<br>@endforeach

