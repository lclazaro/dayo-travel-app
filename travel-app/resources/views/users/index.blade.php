@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>User List</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/users/create') }}" class="btn btn-link btn-sm" title="Add New User" style="padding: 0;">
            <img src="{{ asset('assets/img/add.png') }}" alt="Add New" style="height: 20px; width: 20px;"> <!-- Adjust the size as needed -->
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID No. </th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Contact no.</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->fname }}</td>
                        <td>{{ $item->lname }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->sex }}</td>
                        <td>{{ $item->contactnum }}</td>
                        <td>{{ $item->email }}</td>

                        <td>
                            <a href="{{ url('/users/' . $item->id) }}" title="View User" class="btn btn-link btn-sm" style="padding: 0;">
                                <img src="{{ asset('assets/img/view.png') }}" alt="View" style="height: 20px; width: 20px;"> <!-- Adjust the size as needed -->
                            </a>
                            <a href="{{ url('/users/' . $item->id . '/edit') }}" title="Edit User" class="btn btn-link btn-sm" style="padding: 0;">
                                <img src="{{ asset('assets/img/edit.png') }}" alt="Edit" style="height: 20px; width: 20px;"> <!-- Adjust the size as needed -->
                            </a>
                                            <form method="POST" action="{{ url('/users/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-link btn-sm" title="Delete User" style="padding: 0; border: none; background: none;" onclick="return confirm('Confirm delete?')">
                        <img src="{{ asset('assets/img/delete.png') }}" alt="Delete" style="height: 20px; width: 20px;">
                    </button>
                </form>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
