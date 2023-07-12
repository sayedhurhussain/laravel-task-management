<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@section('title', 'Create Task')

<div class="row">
    <div class="col-xl-12">
        <div class="card card-default">
            <div class="card-header">
                <h1>Create Task</h1>
            </div>
            <div class="card-body">
                {{-- <form method="POST" action="{{ route('meetings.store') }}"> --}}
                    @csrf
                    <div class="form-group">
                        <label for="name">Task Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority<span class="text-danger">*</span></label>
                        <input class="form-control @error('priority') is-invalid @enderror" id="priority" name="priority" value=" {{ old('priority') }}" required>
                        @error('priority')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="project">Project<span class="text-danger">*</span></label>
                        <select type="project"class="form-control input-lg  @error('project') is-invalid @enderror" id="project" name="project_id" required>
                            @foreach($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select><br>
                        @error('project')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>

