@extends('Admin.index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ isset($image) ? 'Edit Image' : 'Add Image' }}</h1>
                    <h6 class="text-danger">* Items marked with an asterisk are required fields and must be completed</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
           
            <div class="card-body">
                <form action="{{ isset($image) ? url('/admin/images/edit') : url('/admin/images/add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="imageId" value="{{ isset($image) ? $image->id : '' }}">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Category<span style="color:red">*</span></label>
                                <select class="form-control" name="category" id="">
                                    <option value="0">--Choose--</option>
                                    <option value="banner">Banner</option>
                                    <option value="fantasyGames">Fantasy Games</option>
                                    <option value="liveCasino">Live Casino</option>
                                    <option value="logo">Logo</option>
                                    <option value="outliveCasino">Our Live Casino</option>
                                    <option value="popular_today">Popular Today</option>
                                    <option value="sport">Sports</option>
                                    <option value="slot_games">Slot Games</option>
                                    <option value="virtualCasino">Virtual Casino</option>
                                </select>
                                @error('category')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Image<span style="color:red">*</span></label>
                                <input type="file" name="files[]" class="form-control" multiple>
                                @error('files')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" name="heading" class="form-control" multiple>
                                @error('heading')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Screen</label>
                                <select  name="screen_type"  >
                                    <option value="0">--Choose--</option>
                                    <option value="mobile">Mobile</option>
                                    <option value="desktop">Desktop</option>
                                </select>
                                @error('heading')
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
