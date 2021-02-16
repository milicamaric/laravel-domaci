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
    <th>Classroom</th>
    <th>Length</th>
    <th>Schedule</th>
    <th>Professor</th>
  </tr>
  </thead>
  <tbody>
    @foreach ($courses->all() as $course)
    <tr>
      <td>{{$course['id']}}</td>
      <td>{{$course['name']}}</td>
      <td>{{$course['classroom']}}</td>
      <td>{{$course['length']}}</td>
      <td>{{$course['schedule']}}</td>
      <td>{{$course['professor'][0]['first_name'] . ' ' . $course['professor'][0]['last_name']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>
