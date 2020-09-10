@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table table-hover">
        <tr>
            <th>Employee name</th>
            <th>Project</th>
            <th>Actions</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->project['name'] }}</td>
            <td>
                <form action={{ route('employee.destroy', $employee->id) }} method="POST">
                <a class="btn btn-info" href={{ route('employee.edit', $employee->id) }}>Edit</a>
                @csrf @method('delete')
                <input type="submit" class="btn btn-secondary" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('employee.create') }}" class="btn btn-info">Add new</a>
    </div>
</div>
@endsection