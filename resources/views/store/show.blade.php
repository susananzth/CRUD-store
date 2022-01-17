<x-store-layout>
    <main class="px-0 pb-5 text-white ">
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Tienda de camisas</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row bg-white p-2 border rounded justify-content-center">
                    <div class="col-6">
                        <img class="w-100" src="{{asset('img/'.$product->file)}}" alt="">
                    </div>
                    <div class="col-6 pt-5 text-dark">
                        <h5 class="fw-bolder fs-2">{{$product->description}}</h5>
                        <!-- Product price-->
                        <p>Precio: ${{$product->prices()->first()->description}}</p>
                        <p>Tallas:
                            @foreach ($product->sizes as $size)
                            {{$size->description.', '}}
                            @endforeach
                        </p>

                        <div class="pt-3">
                            <div class=""><a class="btn btn-outline-dark mt-auto" href="{{route('product.show', $product->id)}}"><i class="bi bi-cart"></i> Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-store-layout>
