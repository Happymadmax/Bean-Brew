@props(['name'])

@error($name)
    <p class="text-xs text-red-500 font-semibold font-suse mt-1">{{ $message }}</p>
@enderror