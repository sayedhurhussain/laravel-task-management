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
                                <th>Task Priority</th>
                                <th>Project Name</th>
                                <th>Timestamps</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->priority }}</td>
                                    <td>{{ $task->project->name }}</td>
                                    <td>{{ $task->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>