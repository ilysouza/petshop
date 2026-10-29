<div class="d-flex align-items-center justify-content-center py-4">
    <div class="card d-flex" style="width: 400px">

        <div class="card-body">

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <form wire:submit="login">

                <label class="form-label mb-2">Endereço de Email</label>
                <input type="email" class="form-control" placeholder="name@example.com" wire:model='email'>

                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter password" wire:model='password'>
        </div>

        <div class="col-auto d-flex justify-content-center">
            <button type="submit" class="btn-solid theme-accent mb-3">Entrar</button>
        </div>

        </form>

    </div>
</div>