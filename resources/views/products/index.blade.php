@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Biscotti")
{{-- contenuti --}}
@section("content")
    <section id="biscotti">
        <div class="container">
            <h1>
                Tutti i Biscotti
            </h1>
            <div class="card-container">
                @foreach ($products as $product)
                    <div class="card">
                        <h1>
                            {{ $product->nome}}
                        </h1>
                        <a href="{{ route('products.show', ['product' => $product->id] ) }}">
                            Dettagli
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
