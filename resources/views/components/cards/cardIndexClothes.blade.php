@props(['url_img', 'title'])
<div class="pt-2 w-[19.5rem] h-[20.5rem] card bg-base-100 shadow-xl image-full
    xl:w-[28rem] xl:h-[30rem]
    lg:w-[18rem] lg:h-[20rem]
    md:w-[13.5rem] md:h-[15.5rem]
">
    <figure><img src="{{ $url_img }}" alt="{{ $title }}" /></figure>
    <div class="card-body">
      <h2 class="card-title uppercase text-2xl lg:text-4xl">{{ $title }}</h2>
    </div>
  </div>