<!-- resources/views/shifts/create.blade.php -->

<h1>Create New Shift</h1>

<form action="{{ route('shifts.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="shift_code">Shift Code:</label>
        <input type="text" class="form-control" id="shift_code" name="shift_code">
    </div>

    <div class="form-group">
        <label for="shift_name">Shift Name:</label>
        <input type="text" class="form-control" id="shift_name" name="shift_name">
    </div>

    <div class="form-group">
        <label for="start_shift">Start Shift:</label>
        <input type="text" class="form-control" id="start_shift" name="start_shift">
    </div>

    <div class="form-group">
        <label for="end_shift">End Shift:</label>
        <input type="text" class="form-control" id="end_shift" name="end_shift">
    </div>

    <div class="form-group">
        <label for="data_flag">Data Flag:</label>
        <input type="number" class="form-control" id="data_flag" name="data_flag">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
