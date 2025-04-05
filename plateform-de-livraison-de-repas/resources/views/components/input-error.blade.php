@props(['for' => null])  <!-- Ajout d'une valeur par défaut -->

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
@enderror
