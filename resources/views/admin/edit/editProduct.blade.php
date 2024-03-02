@extends('admin.layout.tempalate')
@section('content')
    <!-- Basic Layout -->
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">UPDATE-PRODUCT</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @foreach ($products as $product)
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">PRODUCT TITEL</label>
                                    <input type="text" class="form-control" id="basic-default-fullname"
                                        name="product_name" placeholder="PRODUCT TITEL"
                                        value="{{ $product['product_name'] }}" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">PRODUCT PRICE</label>
                                    <input type="text" class="form-control" id="basic-default-company"
                                        name="product_price" placeholder="PRODUCTT PRICE" value="{{ $product['product_price'] }}"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">SHORT DESCAPTION</label>
                                    <textarea class="form-control" id="product_short_desc" rows="3" name="product_short_desc"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">LONG DESCAPTION</label>
                                    <textarea class="form-control" id="product_long_desc" rows="6" name="product_long_desc"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">SELECT CATEGORY</label>
                                    <select class="form-select" id="product_category_id" name="product_category_id"
                                        aria-label="Default select example">
                                        <option selected>SELECT CATEGORY</option>
                                        @foreach ($category as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">SELECT SUBCATEGORY</label>
                                    <select class="form-select" id="product_subcategory_id" name="product_subcategory_id"
                                        aria-label="Default select example">
                                        <option selected>SELECT SUB-CATEGORY</option>
                                        @foreach ($subcategory as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">QUANTITY</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="quantity"
                                        placeholder="QUANTITY" value="{{$product['quantity']}}"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">ADD KEY-WORD</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="kay_word"
                                        placeholder="KEY-WORDS" value="{{$product['kay_word']}}"/>
                                </div>
                                <div>
                                    <label for="formFileDisabled" class="form-label">ADD PRODCUT IMG</label>
                                    <input class="form-control" type="file" id="formFileDisabled" name="product_img" />
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary mt-3" style="float: right;">UPDATE
                                PRODUCT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
