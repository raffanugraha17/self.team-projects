<h1>Shifts</h1>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Shift Code</th>
            <th>Shift Name</th>
            <th>Start Shift</th>
            <th>End Shift</th>
            <th>Data Flag</th>
            <th width="280px">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shifts as $shift)
            <tr>
                <td>{{ $shift->shift_code }}</td>
                <td>{{ $shift->shift_name }}</td>
                <td>{{ $shift->start_shift }}</td>
                <td>{{ $shift->end_shift }}</td>
                <td>{{ $shift->data_flag }}</td>
                <td>
                    <form action="{{ route('shifts.destroy', $shift->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('shifts.edit', $shift->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-success" href="{{ route('shifts.create') }}">Create New Shift</a>
