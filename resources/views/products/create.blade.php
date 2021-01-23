@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Inserisci")
{{-- contenuti --}}
@section("content")
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-4 mb-4">Inserisci un nuovo biscotto</h1>
                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf
                        @include('partials.validation-errors')
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Marca</label>
                            <input type="text" name="marca" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Quantità</label>
                            <input type="number" name="quantita" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Descrizione</label>
                            <input type="text" name="descrizione" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Prezzo</label>
                            <input type="number"  step='0.01' name="prezzo" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Salva biscotto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
