@extends('template.base')

@section('main')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="page-header">{{{ $pageTitle }}}</h1>

        @if (Session::get('successMessage'))
            <div class="alert alert-success">
                <span class="glyphicon glyphicon-ok"></span>
                {{{ Session::get('successMessage') }}}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-2">
        <label for="batch_action">With selected:</label>
        <select id="batch_action" class="chosen-select" style="width:150px" name="batch_action" data-placeholder="Please select...">
            <option></option>
            <option value="delete">Delete</option>
        </select>
    </div>
    <div class="col-md-4 pull-right">
        <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Create a new faculty</a>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Faculty Code</th>
                    <th>Faculty Name</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($faculties as $faculty)
                    <tr>
                        <td><input type="checkbox" class="record" name="record[]" value="{{{ $faculty->code }}}"></td>
                        <td><a href="{{ route('faculty.show', $faculty->code) }}">{{{ $faculty->code }}}</a></td>
                        <td><a href="{{ route('faculty.show', $faculty->code) }}">{{{ $faculty->name }}}</a></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Select <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#"><span class="text-danger">Delete</span></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">{{ $faculties->links() }}</div>
    </div>
</div>




@stop