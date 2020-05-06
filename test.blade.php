<!DOCTYPE html>
<html>
	<head>
		<title>My view</title>
	</head>
	<body>
		<ul>
			@foreach($links as $link)
			<li>
				<a href="{{$link['href']}}">{{$link['text']}}</a>
			</li>
			@endforeach
		</ul>

		<table>
			<tr>
				<th>iteration</th>
				<th>Имя</th>
				<th>Фамилия</th>
				<th>Зарплата</th>
			</tr>
			@foreach($employees as $employe)
			@if($employe['salary'] >= 2000)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$employe['name']}}</td>
				<td>{{$employe['surname']}}</td>
				<td>{{$employe['salary']}}</td>
			</tr>
			@endif
			@endforeach
		</table>

		<table>
			@foreach($users as $user)
			<tr>
				@if($user['banned'] == true)
				<td style="color: red">
					{{$user['name']}}
				</td>
				<td>banned</td>

				@elseif($user['banned'] == false)
				<td style="color: green">
					{{$user['name']}}
				</td>
				<td>active</td>

				@endif
				<td>{{$user['surname']}}</td>
			</tr>
			@endforeach
		</table>

		@foreach($strings as $string)
		<input value="{{$string}}">
		@endforeach
		<br><br>


		<form action="" method="GET">
			<select class="" name="string">
			@foreach($strings as $string)

				<option value="{{$string}}">
					{{$string}}
				</option>

			@endforeach
			</select>
			<input type="submit">
		</form>

<p>{{$lastDayInMonth}}</p>
<p>{{$month}}</p>

<ul>
	@for($i = $firstDay; $i <= $lastDayInMonth; $i++)
	@if($i == $dayNow)
	<li class="active">{{$i}}</li>
	@else
	<li>{{$i}}</li>
	@endif
	@endfor
</ul>





	</body>
</html>
