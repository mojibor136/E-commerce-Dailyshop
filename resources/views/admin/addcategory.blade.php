@extends('admin.layout.tempalate')
@section('content')
    <!-- Basic Layout -->
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add-Category</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    @if (session()->has('massage'))
                        <div class="alert alert-success">
                            <li>{{ session()->get('massage') }}</li>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('storecategory') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @error('category_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">ADD CATEGORY</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="category_name"
                                    value="{{ old('category_name') }}" placeholder="ADD CATEGORY" />
                            </div>
                            @error('category_img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div>
                                <label for="formFileDisabled" class="form-label">ADD CATEGORY IMG</label>
                                <input class="form-control" type="file" id="formFileDisabled" name="category_img" />
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
