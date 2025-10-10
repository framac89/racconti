<x-layout>
    <main class="container my-3 pink rounded">
        <section class="row justify-content-center">
        </section>
        <section class="row justify-content-center">
            <article class="col-12 col-md-8 col-lg-7 p-4">
                <h1 class="text-center">Qui puoi registrarti</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci il tuo Nome</label>
                        <input name="name" type="name" class="form-control" id="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation"
                            class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="password_confirmation">
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit"
                            class="mt-2 border border-dark btn btn-light w-50">Registrami!</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
</x-layout>