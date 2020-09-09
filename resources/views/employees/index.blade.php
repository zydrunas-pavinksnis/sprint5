@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Employee name</th>
            <th>Project</th>
            <th>Actions</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td></td>
            <td>
                <form action={{ route('employee.destroy', $employee->id) }} method="POST">
                <a class="btn btn-success" href={{ route('employee.edit', $employee->id) }}>Edit</a>
                @csrf @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('project.create') }}" class="btn btn-success">Add new</a>
    </div>
</div>
@endsection