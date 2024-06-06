@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>User List</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/users/create') }}" class="btn btn-success btn-sm" title="Add New User">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Country Code</th>
                        <th>Country Name</th>
                        <th>Continent</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($countrys as $item)
                    <tr>
                        <!-- <td>{{ $loop->iteration }}</td> -->
                        <td>{{ $item->country_code }}</td>
                        <td>{{ $item->country_name }}</td>
                        <td>{{ $item->continent }}</td>

                        <td>
                            <a href="{{ url('/countries/' . $item->country_code) }}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/countries/' . $item->country_code . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/countries' . '/' . $item->country_code) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection