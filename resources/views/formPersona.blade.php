<x-guest-layout>
<form method="POST" action="{{ route('CreateNewPersona') }}">
    @csrf

    <div>
        <x-input-label for="nombre" :value="__('Nombres')" />
        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
        <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
    </div>


    <div class="mt-4">
        <x-input-label for="apellido" :value="__('Apellidos')" />
        <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
        <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="direccion_particular" :value="__('Dirección particular')" />
        <x-text-input id="direccion_particular" class="block mt-1 w-full" type="text" name="direccion_particular" :value="old('direccion_particular')" required autofocus autocomplete="direccion_particular" />
        <x-input-error :messages="$errors->get('direccion_particular')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="direccion_laboral" :value="__('Dirección laboral')" />
        <x-text-input id="direccion_laboral" class="block mt-1 w-full" type="text" name="direccion_laboral" :value="old('direccion_laboral')" required autofocus autocomplete="direccion_laboral" />
        <x-input-error :messages="$errors->get('direccion_laboral')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="email" :value="__('Correo electrónico')" />
        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="nro_telef_celular" :value="__('Número de teléfono/celular')" />
        <x-text-input id="nro_telef_celular" class="block mt-1 w-full" type="text" name="nro_telef_celular" :value="old('nro_telef_celular')" required autofocus autocomplete="nro_telef_celular" />
        <x-input-error :messages="$errors->get('nro_telef_celular')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="sitio_web" :value="__('Sitio Web')" />
        <x-text-input id="sitio_web" class="block mt-1 w-full" type="text" name="sitio_web" :value="old('sitio_web')" autofocus autocomplete="sitio_web" />
        <x-input-error :messages="$errors->get('sitio_web')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="observacion" :value="__('Observaciones')" />
        <x-text-input id="observacion" class="block mt-1 w-full" type="text" name="observacion" :value="old('observacion')" autofocus autocomplete="observacion" />
        <x-input-error :messages="$errors->get('observacion')" class="mt-2" />
    </div>

    @isset($paises)
        <div class="mt-4">
            <x-input-label for="id_pais" :value="__('País')" />
            <select id="id_pais" name="id_pais" class="block w-full mt-1">
                <option value="" selected disabled>--Seleccionar país--</option>
                @foreach ($paises as $pais)
                    <option value="{{ $pais->id_pais }}">{{ $pais->nombre_pais }}</option>
                @endforeach 
            </select>
        </div>
    @endisset

    
    <div class="mt-4 text-center">
        <x-primary-button class="ms-4">
            {{ __('Save') }}
        </x-primary-button>
    </div>
    
</form>
</x-guest-layout>

