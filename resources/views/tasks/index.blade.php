<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@section('title', 'Index Task')

<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <h1>Taks List</h1>
                <a class="btn btn-primary btn-rounded btn-md float-right" href="{{ url('/tasks/create') }}">Create Task</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" style="width:100%">
                        <thead class="bg-light">
                            <tr>
                                <th>Task Name</th>
                                <th>Priority</th>
                                <th>Project</th>
                                <th>Timestamps</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->priority }}</td>
                                    <td>{{ $task->project->name }}</td>
                                    <td>{{ $task->created_at }}</td>
                                    <td>
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>