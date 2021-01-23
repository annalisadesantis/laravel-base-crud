@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Prodotti")
{{-- contenuti --}}
@section("content")
    <section id="biscotti">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        Tutti i Prodotti
                    </h1>
                    <a href="#" class="btn btn-primary inserisci">
                        Inserisci nuovo prodotto
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Prezzo</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        {{ $product->id }}
                                    </td>
                                    <td>
                                        {{ $product->nome }}
                                    </td>
                                    <td>
                                        {{ $product->marca }}
                                    </td>
                                    <td>
                                        &euro; {{ number_format($product->prezzo, 2, ',', ' ') }}
                                    </td>
                                    <td>
                                        <a href="{{ route('products.show', ['product' => $product->id] ) }}" class="btn btn-success">
                                            Dettagli
                                        </a>
                                        <a href="#" class="btn btn-warning">
                                            Modifica
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            Cancella
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
