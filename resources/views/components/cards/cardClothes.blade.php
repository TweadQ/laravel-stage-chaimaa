@props(['url_img', 'title'])
<div class="">
    <img class="w-[20rem] h-[22rem]"
        alt="{{ $title }}"
        src="{{ asset('storage/' . $url_img) }}"
    >
    <div class="text-center">
            <a href="" class="pb-3 text-2xl font-black uppercase text-teal-700">{{ $title }}</a>
    </div>
</div>