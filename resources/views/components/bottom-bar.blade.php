<div id="bottom-bar" class="flex flex-row w-full space-x-8 items-center">
    <a href="/profil_pasien">
        @include('icons.avatar')
    </a>
    <div class="bg-white flex flex-row justify-between w-full items-center px-8 rounded-full py-0">
        @foreach ($bar_items as $item_name => $values)
            <div class="rounded-full hover:bg-[#D9D9D9] p-3">
                <a href={{ $values[1] }}>
                    @include($values[0])
                </a>
            </div>
        @endforeach
    </div>
</div>