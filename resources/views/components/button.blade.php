<button type="button"
    class="{{ $class }} {{ $bg_color  }} {{ $fg_color }} hover:{{ $hover_color }} w-80 text-2xl font-bold py-2 px-4 rounded-full"
    onclick={{ $onclick }}>
    {{ $slot }}
</button>