@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Inserisci")
{{-- contenuti --}}
@section("content")
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-4 mb-4">
                        Modifica: {{ $product->nome }}
                    </h1>
                    <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" value="{{ $product->nome }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Marca</label>
                            <input type="text" name="marca" value="{{ $product->marca }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Quantità</label>
                            <input type="number" name="quantita" value="{{ $product->quantita }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Descrizione</label>
                            <input type="text" name="descrizione" value="{{ $product->descrizione }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Prezzo</label>
                            <input type="number"  step='0.01' name="prezzo" value="{{ $product->prezzo }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Salva modifiche
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
