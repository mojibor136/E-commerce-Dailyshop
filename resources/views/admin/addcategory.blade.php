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
                        <form action="{{ route('storecategory') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">ADD CATEGORY</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="category_name"
                                    placeholder="ADD CATEGORY" />
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
