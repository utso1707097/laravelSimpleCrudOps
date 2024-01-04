<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Course List <a href="{{ route('course.create')}}">New Course Add</a></h2>
    @if(Session::get('success'))

    {{ Session::get('success') }}

    @endif


    <table>
        <tr>
        <th>Serial No.</th>
        <th>Name</th>
        <th>Fee</th>
        <th>Actions</th>
        </tr>
        @foreach($courses as $course)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->fee }}</td>
            <td>
                <a href="{{route('course.edit',$course->id)}}">Edit</a>
                <a href="{{route('course.show',$course->id)}}">Show</a>
                <form action="{{route('course.destroy',$course->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Data Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>

    {!!$courses->links()!!}
</body>
</html>