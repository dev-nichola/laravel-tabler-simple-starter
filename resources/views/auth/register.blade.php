<x-auth-layout>
    <form class="card card-md" action="{{ route('register.store') }}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method('POST')
        
        <div class="card-body">
          <h2 class="card-title text-center mb-4">Register</h2>
          <div class="mb-3">
            
            <x-form-label :required="true" label="Name"/>
            <x-form-input name="name" placeholder="Insert Name" value="{{ old('name') }}"/>
            <x-form-error key="name"/>
           
          </div>
          <div class="mb-3">
            <x-form-label :required="true" label="Email Address"/>
            <x-form-input name="email" placeholder="Inser Name" value="{{ old('email') }}"/>
            <x-form-error key="email"/>
          </div>

          <div class="mb-3">
            <x-form-label :required="true" label="Password"/>
            <x-form-input type="password" name="password" placeholder="Insert password"/>
            <x-form-error key="password"/>
          </div>

          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Register</button>
          </div>
        </div>
      </form>

      <div class="text-center text-secondary mt-3">
       Already have account? <a href="{{ route('login') }}" wire:navigate tabindex="-1">Login</a>
      </div>
    </div>
</x-auth-layout>