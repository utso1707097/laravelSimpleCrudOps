<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Course Update Form</h2>
    @if($errors->any())
    @foreach ($errors->all() as $errors )
        {{ $errors }}
    @endforeach
    @endif
<form action="{{ route('course.update',$course->id) }}" method="post">
    @csrf
    @method('PUT')
  <label for="name">Course Name:</label><br>
  <input type="text" id="name" name="name" value={{ $course->name }}><br>
  <label for="fee">Course Fee:</label><br>
  <input type="text" id="fee" name="fee" value={{ $course->fee }}><br><br>
  <input type="submit" value="Update">
</form>
<a href="{{route('course.index')}}">Back to Course List</a>
</body>
</html>