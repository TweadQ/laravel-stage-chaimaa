@props(['url_img', 'title'])
{{-- <div class="flex flex-col items-center">
    <img class="w-[38rem] h-[40rem] relative"
        alt="{{ $title }}"
        src="{{ $url_img }}"
    >
    <div class="p-4 absolute pt-[18rem] pr-10">
            <a href="" class="pb-3 text-[5rem] font-black uppercase text-teal-700">{{ $title }}</a>
    </div>
</div> --}}
<div class="pt-2 w-[19.5rem] h-[20.5rem] card bg-base-100 shadow-xl image-full
    {{-- 2xl:w-[38.1rem] 2xl:h-[40.5rem] --}}
    xl:w-[28rem] xl:h-[30rem]
    lg:w-[18rem] lg:h-[20rem]
    md:w-[13.5rem] md:h-[15.5rem]
">
    <figure><img src="{{ $url_img }}" alt="{{ $title }}" /></figure>
    <div class="card-body">
      <h2 class="card-title uppercase text-2xl lg:text-4xl">{{ $title }}</h2>
    </div>
  </div>