@props(['url_img', 'title'])
<div class="pt-2 w-[19.5rem] h-[20.5rem] card image-full 
  xl:w-[42.3rem] xl:h-[34.5rem]
  lg:w-[27.3rem] lg:h-[28.5rem]
  md:w-[20.5rem] md:h-[20.5rem]
">
    <figure><img src="{{ $url_img }}" alt="{{ $title }}" /></figure>
    <div class="card-body">
      <h2 class="card-title uppercase text-2xl lg:text-4xl">{{ $title }}</h2>
    </div>
  </div>