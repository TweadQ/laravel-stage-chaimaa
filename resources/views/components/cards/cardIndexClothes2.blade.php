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
<div class="pt-2 w-[19.5rem] h-[20.5rem] card image-full 
  {{-- 2xl:w-[57.5rem] 2xl:h-[45rem] --}}
  xl:w-[42.3rem] xl:h-[34.5rem]
  lg:w-[27.3rem] lg:h-[28.5rem]
  md:w-[20.5rem] md:h-[20.5rem]
">
    <figure><img src="{{ $url_img }}" alt="{{ $title }}" /></figure>
    <div class="card-body">
      <h2 class="card-title uppercase text-2xl lg:text-4xl">{{ $title }}</h2>
    </div>
  </div>