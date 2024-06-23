<x-auth-layout>
    <form class="card card-md" action="{{ route('login.store') }}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method('POST')
        
        <div class="card-body">
          <h2 class="card-title text-center mb-4">Login</h2>
          <div class="mb-3">
            <x-form-label :required="true" label="Email Address"/>
            <x-form-input name="email" placeholder="Inser Email Address" value="{{ old('email') }}"/>
            <x-form-error key="email"/>
          </div>

          <div class="mb-3">
            <x-form-label :required="true" label="Password"/>
            <x-form-input type="password" name="password" placeholder="Insert password"/>
            <x-form-error key="password"/>
          </div>

          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </div>
        </div>
      </form>

      <div class="text-center text-secondary mt-3">
        Don't have an account? <a href="{{ route('register') }}" wire:navigate tabindex="-1">Register</a>
    </div>
    
    </div>
</x-auth-layout>