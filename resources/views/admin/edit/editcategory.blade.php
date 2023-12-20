@extends('admin.layout.tempalate')
@section('content')
    <!-- Basic Layout -->
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit -Category</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('updatecategory')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$edit_category->id}}" name="category_id">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">ADD CATEGORY</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="category_name"
                                  value="{{$edit_category->category_name}}"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
