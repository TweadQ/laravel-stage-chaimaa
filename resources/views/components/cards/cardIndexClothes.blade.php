@props(['url_img', 'title'])
<div class="flex flex-col items-center">
    <img class="max-w-[30rem] max-h-[30rem] rounded-2xl"
        alt="{{ $title }}"
        src="{{ $url_img }}"
    >
    <div class="p-4">
            <a href="" class="pb-3 text-lg font-black">{{ $title }}</a>
    </div>
</div>