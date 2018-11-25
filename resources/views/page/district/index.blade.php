@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h1>District</h1>
    </div>
    <div class="page-body">

        @include('include.show_flash_error_message')

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">District &nbsp;&nbsp;
                        <a href="{{ route('district.create') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add New District</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover js-exportable dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>District</th>
                                    <th>Address</th>
                                    <th>Division</th>
                                    <th>Area</th>
                                    <th>Zone</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($district as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address}}</td>
                                        <td>{{ $item->zone->area->division->name}}</td>
                                        <td>{{ $item->zone->area->name}}</td>
                                        <td>{{ $item->zone->name}}</td>
                                        <td>
                                            <a href="{{ route('district.show', $item->id) }}"
                                               title="View District" class="btn btn-outline btn-success"><i
                                                        class="fa fa-check" aria-hidden="true"></i> View</a>
                                            <a href="{{ route('district.edit', $item->id)  }}"
                                               title="Edit district" class="btn btn-outline btn-primary"><i
                                                        class="fa fa-edit"></i> Edit</a>

                                            <form method="POST"
                                                  action="{{ route('district.destroy', $item->id)  }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-outline btn-danger"
                                                        title="Delete district"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>district</th>
                                    <th>Address</th>
                                    <th>Division</th>
                                    <th>Area</th>
                                    <th>Zone</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


