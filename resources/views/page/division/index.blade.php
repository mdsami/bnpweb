@extends('layouts.master')

@section('content')
<div class="page-heading">
    <h1>Division</h1>
</div>
<div class="page-body">

    @include('include.show_flash_error_message')

    <div class="row clearfix">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Division &nbsp;&nbsp;
                    <a href="{{ url('division/create') }}" class="btn btn-primary btn-sm"><i
                        class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add New division</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover js-exportable dataTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>division Name</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($division as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ route('division.show',$item->id) }}"
                                             title="View division" class="btn btn-outline btn-success"><i
                                             class="fa fa-check" aria-hidden="true"></i> View</a>
                                             <a href="{{ route('division.edit',$item->id) }}"
                                                 title="Edit division" class="btn btn-outline btn-primary"><i
                                                 class="fa fa-edit"></i> Edit</a>

                                                 <form method="POST"
                                                 action="{{ route('division.destroy', $item->id)  }}"
                                                 accept-charset="UTF-8" style="display:inline">
                                                 {{ method_field('DELETE') }}
                                                 {{ csrf_field() }}
                                                 <button type="submit" class="btn btn-outline btn-danger"
                                                 title="Delete division"
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
                                    <th>division Name</th>

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


