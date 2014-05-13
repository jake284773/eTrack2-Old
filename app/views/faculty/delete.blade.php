<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete these faculties?</h4>
</div>
<div class="modal-body">
    <h4>First check you have the correct faculties:</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Faculty Code</th>
                <th>Faculty Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($faculties as $faculty)
                <tr>
                    <td>{{{ $faculty->code }}}</td>
                    <td>{{{ $faculty->name }}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger">Yes</button>
    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
</div>