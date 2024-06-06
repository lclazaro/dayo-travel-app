@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Listing Types List</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/listingtypes/create') }}" class="btn btn-success btn-sm" title="Add New User">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Unit Type</th>
                        <th>Unit Term</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($listingtypes as $item)
                    <tr>
                        <!-- <td>{{ $loop->iteration }}</td> -->
                        <td>{{ $item->unit_type }}</td>
                        <td>{{ $item->unit_term }}</td>

                        <td>
                            <a href="{{ url('/listingtypes/' . $item->unit_type) }}" title="View Listing Type"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/listingtypes/' . $item->unit_type . '/edit') }}" title="Edit Listing Type"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/listngtypes' . '/' . $item->unit_type) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Listing Type" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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