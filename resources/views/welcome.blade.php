<!-- <!DOCTYPE html> -->
@include('layouts.header')
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">
</head>

<body>
    <main class="main-container">
        {{-- Header container slider all html --}}
        <div class="header-container">
            <div class="category-banner">
                <div class="category">
                    <ul>
                        @foreach ($Categories as $Category)
                            <a
                                href="{{ route('category.product', ['id' => $Category->id, 'slug' => $Category->slug]) }}">
                                <li>{{ $Category->category_name }}</li>
                                <div class="arr"></div>
                            </a>
                        @endforeach
                    </ul>
                </div>

                <div class="slideshow-container">
                    <div class="banner">
                        <img class="slides-img" src="{{ asset('assets/img/banner/banner.jpg') }}" alt="">
                        <img class="slides-img" src="{{ asset('assets/img/banner/banner1.jpg') }}" alt="">
                        <img class="slides-img" src="{{ asset('assets/img/banner/banner3.jpg') }}" alt="">
                        <div class="slider-btn">
                            <div class="prev"></div>
                            <div class="next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /* categories container all html*/ --}}
        <div class="categories-container">
            <div class="categories-card">
            </div>
        </div>
        </div>
        {{-- /* top selles Products container all html*/ --}}
        <div class="top-product-container">
            <div class="type">
                <span>top salling</span>
                <a href="">view more</a>
            </div>
            <div class="card top-product-card">
                @foreach ($TopSelles as $TopSelle)
                    <a
                        href="{{ route('product.details', ['id' => $TopSelle->id, 'productName' => $TopSelle->product_name]) }}">
                        <li class="card">
                            <img src="{{ asset('assets/image/ProductImg/' . $TopSelle->product_img) }}" alt="">
                            <div class="text">
                                <span class="titel">{{ $TopSelle->product_name }}</span>
                                <div class="price">
                                    <span class="price">bdt:{{ $TopSelle->product_price }}</span>
                                    <div class="discount">
                                        <span>bdt:570</span>
                                    </div>
                                </div>
                                <div class="star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                    <span>(25)</span>
                                    <div class="charge">
                                        <span>free</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                @endforeach
            </div>
        </div>
        {{-- /* Category-container all html*/ --}}
        <div class="category-container">
            <div class="type">
                <span>all category</span>
                <a href="">view more</a>
            </div>
            <div class="card category-card border-0">
                <ul>
                    @foreach ($Categories as $Category)
                        <a href="">
                            <li class="card">
                                <img src="{{ asset('assets/image/CategoryImg/1709013029-65dd782536cd3.jpg') }}"
                                    alt="">
                                <span>{{ $Category->category_name }}</span>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- /* Products container all html*/ --}}
        <div class="product-container">
            <div class="type">
                <span>latest products</span>
            </div>
            <div class="card product-card">
                @foreach ($Products as $Product)
                    <a
                        href="{{ route('product.details', ['id' => $Product->id, 'productName' => $Product->product_name]) }}">
                        <li class="card">
                            <img src="{{ asset('assets/image/ProductImg/' . $Product->product_img) }}" alt="">
                            <div class="text">
                                <span class="titel">{{ $Product->product_name }}</span>
                                <div class="price">
                                    <span class="price">bdt:{{ $Product->product_price }}</span>
                                    <div class="discount">
                                        <span>bdt:570</span>
                                    </div>
                                </div>
                                <div class="star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                    <span>(25)</span>
                                    <div class="charge">
                                        <span>free</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                @endforeach
            </div>
        </div>
    </main>
    <!-- FOOTER  -->
    @include('layouts.footer')
    @include('layouts.bottom-button')
    <script src="{{ asset('assets/js/tempalate.js') }}"></script>
    <script>
        let CategoryNames = '';
        fetch('/GetCategoriesData')
            .then(response => response.json())
            .then(data => {
                data.forEach(item => {
                    let CategoryName = item.category_name.split(' ', 1);
                    let CategoryId = item.id;
                    let CategorySlug = item.slug;
                    var url = '{{ route('category.product', ['id' => ':id', 'slug' => ':slug']) }}';
                    url = url.replace(':id', item.id).replace(':slug', item.slug);
                    CategoryNames +=
                        `<a href="${url}" class="card">
                            <img src="{{ asset('assets/img/banner/vivo.jfif') }}" alt="">
                            <span>${CategoryName.join(' ')}</span>
                        </a>`;
                });
                let CategoryElement = document.querySelector('.categories-card');
                CategoryElement.innerHTML = CategoryNames;
            })
            .catch(error => console.error('Error:', error));
    </script>


</body>

</html>
