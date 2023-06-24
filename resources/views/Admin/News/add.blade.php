@extends('Admin.index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ isset($image) ? 'Edit Anouncement' : 'Add Anouncement' }}</h1>
                    <h6 class="text-danger">* Items marked with an asterisk are required fields and must be completed</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
           
            <div class="card-body">
                <form action="{{ isset($image) ? url('admin/anouncement/edit') : url('admin/anouncement/add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="imageId" value="{{ isset($image) ? $image->id : '' }}">
                       
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Anouncement<span style="color:red">*</span></label>
                                <textarea type="text" name="title" class="form-control" placeholder="Write anouncement"></textarea>
                                @error('title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Country<span style="color:red">*</span></label>
                                <select type="text" name="country" class="form-control" >
                                    <option value="0">--Choose--</option>
                                    <option value="india">India</option>
                                    <option value="pakistan">Pakistan</option>
                                </select>
                                @error('country')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info">Save</button>
                            <a href="{{ url('//admin/images') }}" type="button" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
