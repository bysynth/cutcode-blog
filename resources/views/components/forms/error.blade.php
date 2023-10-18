@props(['name'])

@error($name)
    <div class="mt-3 text-pink text-xxs xs:text-xs">
        {{ $message }}
    </div>
@enderror
