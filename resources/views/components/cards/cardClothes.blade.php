@props(['url_img', 'title'])
<div class="flex flex-col items-center">
    <img class="w-[20rem] h-[22rem] pb-4"
        alt="{{ $title }}"
        src="{{ asset('storage/' . $url_img) }}"
    >
    <p class="pb-3 text-2xl font-black uppercase text-teal-700">{{ $title }}</p>
</div>