@extends('template.base')

@section('main')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="page-header">Welcome {{{ $firstName }}}</h1>
        <p class="lead">What would you like to manage today?</p>

        <div class="list-group">
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">
                    <span class="glyphicon glyphicon-record"></span>
                    Faculties
                </h4>
                <p class="list-group-item-text">
                    Create, modify and remove faculties.
                </p>
            </a>

            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">
                    <span class="glyphicon glyphicon-file"></span>
                    Subject Sectors
                </h4>
                <p class="list-group-item-text">
                    Create, modify and remove subject sectors for units.
                </p>
            </a>

            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">
                    <span class="glyphicon glyphicon-tasks"></span>
                    Courses
                </h4>
                <p class="list-group-item-text">
                    Create, modify and remove courses.
                </p>
            </a>


            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">
                    <span class="glyphicon glyphicon-folder-open"></span>
                    Course Units
                </h4>
                <p class="list-group-item-text">
                    Create, modify and remove course units.
                </p>
            </a>

            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">
                    <span class="glyphicon glyphicon-user"></span>
                    Users
                </h4>
                <p class="list-group-item-text">
                    Create, modify and remove students, tutors and course organisers
                    on the system.
                </p>
            </a>
        </div>
    </div>
</div>

@stop