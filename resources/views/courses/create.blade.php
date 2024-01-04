<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Course Form</h2>
    @if($errors->any())
    @foreach ($errors->all() as $errors )
        {{ $errors }}
    @endforeach
    @endif
<form action="{{ route('course.store') }}" method="post">
    @csrf
  <label for="name">Course Name:</label><br>
  <input type="text" id="name" name="name" placeholder="Laravel"><br>
  <label for="fee">Course Fee:</label><br>
  <input type="text" id="fee" name="fee" placeholder="2600"><br><br>
  <input type="submit" value="Submit">
</form>
<a href="{{route('course.index')}}">Back to Course List</a>
</body>
</html>