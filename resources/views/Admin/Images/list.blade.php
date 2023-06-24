@extends('Admin.index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banners </h1>
                </div>
            </div>
            @if (session()->has('msg-success'))
                <div class="alert alert-success" role="alert">
                    {{ session('msg-success') }}
                </div>
            @elseif (session()->has('msg-error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('msg-success') }}
                </div>
            @endif
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/images/add') }}" class="btn btn-primary mb-4">Add Image</a>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Screen Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($images as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->category }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->screen_type=='0'?'':$item->screen_type }}</td>
                                                <td><img style="max-width: 100px"
                                                        src="{{ asset('storage/Banners/' . $item->filename) }}"
                                                        alt=""></td>
                                                <td>
                                                    {{-- <a href="{{ url('expense-type/edit/?id=' . $item->id) }}"
                                                        title="Edit this expense type" class="btn btn-primary"><i
                                                            class="fa fa-pen"></i></a> --}}
                                                    <button title="Delete this image"
                                                        onclick="manageModal({{ $item->id }})" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10" class="text-center">No data</td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade show" id="modal-default" style=" padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ url('/admin/images/delete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="deleteId" id="deleteInput">

                    <div class="modal-body">
                        <h4>Are you sure you want to delete this image?</h4>
                    </div>
                    <div class="modal-footer ">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" data-dismiss="modal" aria-label="Close"
                            class="btn btn-default">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function manageModal(id) {
            $('#deleteInput').val(id)
            $('#modal-default').modal('show')
        }
    </script>
@endsection
