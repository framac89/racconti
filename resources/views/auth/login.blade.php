<x-layout>
    @if ($errors->has('email'))
        <div class="alert alert-danger text-center">
            {{ $errors->first('email') }}
        </div>
    @endif
    <main class="container mt-5 pink rounded">
        <section class="row justify-content-center">
            <article class="col-12 col-md-8 col-lg-5 p-4">
                <h1 class="text-center">Accedi</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit"
                            class="mt-2 border border-dark btn btn-light w-50">Fammi Accedere!</button>
                    </div>
              
                </form>
            </article>
        </section>
    </main>
</x-layout>