@extends('admin.layout.tempalate')
@section('content')
    <!-- Basic Layout -->
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit SubCategory</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('updatesubcategory')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$subcategory->id}}" name="subcategory_id">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SELECT CATEGORY</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">ADD-SUBCATEGORY</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    name="subcategory_name" value="{{$subcategory->subcategory_name}}"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
