<html>

<head>
    <!-- ne treba kad se ukljuci <script src="{{ asset('js/app.js') }}"></script> na kraj body-ja -->
    <!--<script type="application/javascript" src="/js/app.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div>
<table class="table">
<thead class="thead-dark">
  <tr>
    <th>id</th>
    <th>Name</th> 
    <th>Last Name</th>
    <th>Birthday</th>
    <th>Join date</th>
    <th>Phone</th>
    <th>Email</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($students->all() as $student)
  <tr>
    <td>{{$student['id']}}</td>
    <td>{{$student['first_name']}}</td>
    <td>{{$student['last_name']}}</td>
    <td>{{$student['birthday']}}</td>
    <td>{{$student['join_date']}}</td>
    <td>{{$student['phone']}}</td>
    <td>{{$student['email']}}</td>

  </tr>
</tbody>
  <tr>
      @endforeach
</table>
</div>
</body>
</html>

