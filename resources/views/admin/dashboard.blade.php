@extends('layouts.main')
@section('MainContent')
<br>
@php
use App\Models\Course;
$courses = Course::all();

@endphp

<table class="table table-success table-striped" >
    <thead>
    <tr style="text-align: center;">
        <th>ID</th>
        <th>Course Title</th>
        <th>Category</th>
        <th>Hours</th>
        <th>Start Date</th>
        <th>Teacher</th>
        <th>Details</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>

<tbody>
    @foreach ($courses as $course)
    <tr>
        <td>{{ $course->id }}</td>
        <td>{{ $course->course_title }}</td>
        <td>{{ $course->category }}</td>
        <td>{{ $course->hours }}</td>
        <td>{{ $course->start_date }}</td>
        <td>{{ $course->teacher }}</td>
        <td>
            <a class="btn btn-secondary"href="{{route('course.show',$course->id)}}" >Details</a>
        </td>
        <td>   <a class="btn btn-primary" href="{{route('course.edit',$course->id)}}">
           Edit
         </a>
        </td>
        <td>
            <form action="{{ route('course.destroy', $course->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" id="btn-delete-co">
                   Delete
                </button>
             </form>
        </td>
        <script>
            $(document).ready(function() {
               $("#btn-delete-co").click(function() {
                  alert("Delete Course successfully");
              });
            });
         </script>
    </tr>
    @endforeach
</tbody>
</table>

{{-- {!!  $courses->links()   !!} --}}
@stop
