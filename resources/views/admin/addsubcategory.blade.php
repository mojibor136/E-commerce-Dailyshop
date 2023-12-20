@extends('admin.layout.tempalate')
@section('content')
    <!-- Basic Layout -->
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add SubCategory</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('storesubcategory')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SELECT CATEGORY</label>
                                <select class="form-select" id="category_id" name="category_id"
                                    aria-label="Default select example">
                                    <option selected>SELECT CATEGORY</option>
                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">ADD-SUBCATEGORY</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    name="subcategory_name" placeholder="ADD-SUBCATEGORY" />
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
