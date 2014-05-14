<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete {{{ $facultySpelling == 'faculty' ? 'this faculty' : 'these faculties' }}}?</h4>
</div>
<div class="modal-body">
    <h4>First check you have the correct {{{ $facultySpelling }}}:</h4>
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
    <button type="button" id="btn-batch-confirm" class="btn btn-danger">Yes</button>
    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
</div>
<script>
  $('#btn-batch-confirm').click(function() {
  $('#confirmation').val('true');
  console.log('User clicked on yes.');

  $('#batch_action_form').submit();
});
</script>