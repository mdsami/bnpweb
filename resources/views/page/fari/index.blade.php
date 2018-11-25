@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h1>Fari</h1>
    </div>
    <div class="page-body">

        @include('include.show_flash_error_message')

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Fari &nbsp;&nbsp;
                        <a href="{{ route('fari.create') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add New Fari</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover js-exportable dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fari</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>OC</th>
                                    <th>Long</th>
                                    <th>Lat</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fari as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address}}</td>
                                        <td>{{ $item->oc}}</td>
                                        <td>{{ $item->long}}</td>
                                        <td>{{ $item->lat}}</td>
                                        <td>
                                            <a href="{{ route('fari.show', $item->id) }}"
                                               title="View Fari" class="btn btn-outline btn-success"><i
                                                        class="fa fa-check" aria-hidden="true"></i> View</a>
                                            <a href="{{ route('fari.edit', $item->id)  }}"
                                               title="Edit Fari" class="btn btn-outline btn-primary"><i
                                                        class="fa fa-edit"></i> Edit</a>

                                            <form method="POST"
                                                  action="{{ route('fari.destroy', $item->id)  }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-outline btn-danger"
                                                        title="Delete Fari"
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
                                    <th>Fari</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>OC</th>
                                    <th>Long</th>
                                    <th>Lat</th>
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


