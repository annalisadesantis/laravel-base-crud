@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Dettagli")
{{-- contenuti --}}
@section("content")
    <section id="biscotto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-4 mb-4">
                        Dettaglio: {{ $product->nome }}
                    </h1>
                    @include('partials.success-error-messages')
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Marca</th>
                                <th scope="col">Peso</th>
                                <th scope="col">Descrizione</th>
                                <th scope="col">Prezzo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{ $product->marca}}
                                </td>
                                <td>
                                    {{ $product->quantita}} Kg
                                </td>
                                <td>
                                    {{ $product->descrizione}}
                                </td>
                                <td>
                                    &euro; {{ number_format($product->prezzo, 2, ',', ' ') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
