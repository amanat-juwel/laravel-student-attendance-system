@extends('layouts.template') 
@section('template')
<!-- Content Header -->
<section class="content-header">
    <h1>VAN</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('/')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
        </li>
        <li class="active">VAN</li>
    </ol>
</section>
<!-- End Content Header -->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            @include('partials.message')
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a class="btn btn-info btn-sm" data-toggle="modal" href='#addModal'><i class="fa fa-plus"></i> Add new</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table-bordered datatable" id="" width="100%">
                            <thead>
                                <tr>
                                    <th height="25">Srl</th>
                                    <th> Id.</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($van as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td>
                                            <div class="flex">
                                                <button type="button" class="btn btn-primary btn-xs btnEdit"><i class="fa fa-edit"></i> Edit</button>
                                                <form action="{{ url('/van/'.$data->id) }}" method="post">
                                                    @method('DELETE') {{ csrf_field() }}
                                                    <button class="btn btn-danger btn-xs"  onclick="return confirm('Are you sure you want to delete this item?');"  >
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main Content -->

{{-- START ADD CLASS MODAL --}}
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form" action="{{ route('van.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Add </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input autocomplete="OFF" type="text" name="name" placeholder="Name" required="required" class="form-control input-sm" value="{{ old('name') }}" />
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                        @endif
                    </div>
                     <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" rows="3"  value="{{ old('description') }}">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description')}}</span>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-xs" id="btnSubmit"><i class="fa fa-check"></i> Save changes</button>
                    <button type="button" class="btn btn-default btn-xs" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- END ADD CLASS MODAL --}}

{{-- START EDIT CLASS MODAL --}}
<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form editForm" action="" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input autocomplete="OFF" type="text" name="name" placeholder="Name" required="" class="form-control input-sm" id="editName" />
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="editDescrip" class="form-control" rows="3" >{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description')}}</span>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-xs" id="btnSubmit"> <i class="fa fa-check"></i> Update</button>
                    <button type="button" class="btn btn-default btn-xs" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- END EDIT CLASS MODAL --}}

<script type="text/javascript">
    
   $(function(){

        $('.btnEdit').click(function(){
            var id   = $(this).closest('tr').find('td:eq(1)').text() ;
            var name = $(this).closest('tr').find('td:eq(2)').text() ;
            var description = $(this).closest('tr').find('td:eq(3)').text() ;

            $("#editModal").modal('show') ;
            $("#editName").val(name) ;
            $("#editDescrip").val(description) ;
            $('.editForm').attr('action','{{ url('/van')}}/'+id) ;
        })
   })

</script>

@endsection