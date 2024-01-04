<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Course Update Form</h2>
  <label for="name">Course Name: {{ $course->name }}</label><br>
  <label for="fee">Course Fee: {{ $course->fee }}</label><br>
  <a href="{{route('course.index')}}">Course List</a>
</body>
</html>