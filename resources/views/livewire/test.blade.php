<div>
    <div>
        <div>

            <input wire:model="name" type="text">
            <input wire:model="loud" type="checkbox">
            <select wire:model="greeting">
                <option>Hello</option>
                <option>Goodbye</option>
                <option>Adios</option>
            </select>
            @foreach($names as $name)
                {{ $greeting}} {{ $name }}
                @if ($loud)! @endif
            @endforeach





        </div>
        <button wire:click="resetname">Reset Name</button>

        <form wire: submit.prevent="register">
            <div>
                <label for="email">email</label>
                <input wire: model="email" type="text" id="email" name="email">

                @error('email') <span>{{ $message }}</span> @enderror

            </div>
            <div>
                <label for="password">password</label>
                <input wire:model="password" type="password" id="password" name="password">
                @error('password') <span>{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="passwordConfirmation">passwordConfirmation</label>
                <input wire:model="password2" type="password" id="password" name="password2">

            </div>
        </form>

      
    </div>
</div>
