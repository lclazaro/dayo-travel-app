@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Listing List</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/users/create') }}" class="btn btn-success btn-sm" title="Add New User" style="pdding: 0;"
            <img src="{{ 'asset(assests/img/add.png')}} alt="Add New" sttyle= "height:20px; width: 20px;"
            <!-- i class="fa fa-plus" aria-hidden="true"></i> Add New -->
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>UID No. </th>
                        <th>List ID</th>
                        <th>Name</th>
                        <th>Unit Type</th>
                        <th>Barangay</th>
                        <th>City</th>
                        <th>Province</th>
                        <th>Region</th>
                        <th>Country Code</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($listings as $item)
                    <tr>
                        <!-- <td>{{ $loop->iteration }}</td> -->
                        <td>{{ $item->uid }}</td>
                        <td>{{ $item->list_id }}</td>
                        <td>{{ $item->list_name }}</td>
                        <td>{{ $item->unit_type }}</td>
                        <td>{{ $item->barangay }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->province }}</td>
                        <td>{{ $item->region }}</td>
                        <td>{{ $item->country_code }}</td>

                        <td>
                            <a href="{{ url('/listings/' . $item->list_id) }}" title="View Lisitng"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/listings/' . $item->list_id . '/edit') }}" title="Edit Listing"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/listings' . '/' . $item->list_id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Lisitng" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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