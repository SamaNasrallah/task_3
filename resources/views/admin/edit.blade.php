@extends('layouts.main')
@section('MainContent')

<div class="row form-container">
    <div class="col-md-3" >
        <form action="{{ route('course.update',$course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')    

            <div class="form-group">
                <label for="course_title">Course Title</label>
                <input type="text" name="course_title"   id="course_title" value="{{$course->course_title}}"   class="form-control" style="width:300px; height: 40px;">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category"value="{{$course->category}}"  id="classification" class="form-control" style="width: 300px; height: 40px;">
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" value="{{$course->start_date}}" id="start_date" class="form-control" style="width: 300px; height: 40px;">
            </div>
            <div class="form-group">
                <label for="teacher">Teacher</label>
                <select name="teacher" id=""value="{{$course->teacher}}"  class="custom-select mb-3" style="width: 300px;">
                    <option>Amna</option>
                    <option>Nada</option>
                    <option>Alaa</option>
                    <option>Deema</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hours">Hours</label>
                <input type="number" name="hours"value="{{$course->hours}}"  id="hours" class="form-control"style="width: 300px;" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="details">Details</label>
                <textarea name="details" id="editor"class="form-control" style="width:400px; height: 60px;">{{$course->details}}</textarea>
            </div>
         
            <button type="submit" class="btn btn-primary" id="btn-update">Save</button>
        </form>
        <script>
            $(document).ready(function() {
               $("#btn-update").click(function() {
                  alert("Update Course successfully");
              });
            });
         </script>
    </div>


</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
 tinymce.init({
  selector: 'textarea#editor'
});
</script>
@stop
