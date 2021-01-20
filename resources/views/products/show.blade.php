@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Dettagli")
{{-- contenuti --}}
@section("content")
    <section id="biscotto">
        <div class="container">
            <h1>
                Dettagli {{ $product->nome }}
            </h1>
            <div class="card-container">
                <div class="card">
                    <p>
                        <strong>
                            Marca:
                        </strong>
                        {{ $product->marca}}
                    </p>
                    <p>
                        <strong>
                            Peso:
                        </strong>
                        {{ $product->quantita}} Kg
                    </p>
                    <p>
                        <strong>
                            Descrizione:
                        </strong>
                        {{ $product->descrizione}}
                    </p>
                    <p>
                        <strong>
                            Prezzo:
                        </strong>
                        {{ $product->prezzo}} €
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
