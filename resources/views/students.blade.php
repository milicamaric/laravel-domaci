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
    @foreach ($students->all() as $student)
      <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['first_name']}}</td>
        <td>{{$student['last_name']}}</td>
        <td>{{$student['birthday_date']}}</td>
        <td>{{$student['join_date']}}</td>
        <td>{{$student['phone']}}</td>
        <td>{{$student['email']}}</td>
        <td>{{$student['courses'][0]['name']}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>
