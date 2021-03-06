<html>

<head>
    <!-- ne treba kad se ukljuci <script src="{{ asset('js/app.js') }}"></script> na kraj body-ja -->
    <!--<script type="application/javascript" src="/js/app.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<script src="{{ asset('js/app.js') }}"></script>

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
    <th>Courses</th>
  </tr>
  </thead>
  <tbody>
    @foreach ($professors->all() as $professor)
    <tr>
      <td>{{$professor['id']}}</td>
      <td>{{$professor['first_name']}}</td>
      <td>{{$professor['last_name']}}</td>
      <td>{{$professor['birthday_date']}}</td>
      <td>{{$professor['join_date']}}</td>
      <td>{{$professor['phone']}}</td>
      <td>{{$professor['email']}}</td>
      <td>{{$professor['courses'][0]['name']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>
