@extends('layouts.main')
@section('MainContent')
{{-- <div class="row form-container">
    <h2>Course Details</h2>
    {!! $course->details !!}
</div> --}}



<div class="row form-container">
    <div class="col-md-12" >
        <h2>Course Details {{$course->category}}  :</h2>
        {!! $course->details !!}
    </div>

</div>


@stop
