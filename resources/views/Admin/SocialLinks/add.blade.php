@extends('Admin.index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ isset($image) ? 'Edit Social LInk' : 'Add Social LInk' }}</h1>
                    <h6 class="text-danger">* Items marked with an asterisk are required fields and must be completed</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
           
            <div class="card-body">
                <form action="{{ isset($image) ? url('admin/social-links/edit') : url('admin/social-links/add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="imageId" value="{{ isset($image) ? $image->id : '' }}">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Country<span style="color:red">*</span></label>
                                <select class="form-control" name="country" id="">
                                    <option value="0">--Choose--</option>
                                    <option value="india">India</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="nepal">Nepal</option>
                                </select>
                                @error('country')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- type --}}
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Platform<span style="color:red">*</span></label>
                                <select class="form-control" name="platform" id="">
                                    <option value="0">--Choose--</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="instagram">Instagram</option>
                                    <option value="youtube">Youtube</option>
                                    <option value="telegram">Telegram</option>
                                    <option value="linkedin">Linkedin</option>
                                    <option value="whatsapp">WhatsApp</option>
                                </select>
                                @error('platform')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Link<span style="color:red">*</span></label>
                                <input type="text" name="link" class="form-control">
                                @error('link')
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
