@section('title', __('pages.rooms-meta-title'))
@section('meta_description', __('pages.rooms-meta-desc'))
@section('meta_keywords', __('pages.rooms-meta-keywords'))
@php
    $photos = [
        asset('images/gallery/tradicija-1200-restoran-1.webp'),
        asset('images/gallery/tradicija-1200-restoran-2.webp'),
        asset('images/gallery/tradicija-1200-restoran-3.webp'),
        asset('images/gallery/tradicija-1200-restoran-4.webp'),
        asset('images/gallery/tradicija-1200-restoran-5.webp'),
        asset('images/gallery/tradicija-1200-restoran-6.webp'),
        asset('images/gallery/tradicija-1200-restoran-7.webp'),
        asset('images/gallery/tradicija-1200-restoran-8.webp'),
        asset('images/gallery/tradicija-1200-restoran-10.webp'),
        asset('images/gallery/tradicija-1200-restoran-9.webp'),
    ];
    $featuredImage = $photos[0] ?? null;
    $addedImages   = array_slice($photos, 1);
@endphp

<div x-data="{
    modalOpen: false,
    currentIndex: 0,
    images: @js(array_map(fn($p) => ['src' => asset($p)], $photos)),
    prev(){ this.currentIndex = (this.currentIndex === 0) ? this.images.length - 1 : this.currentIndex - 1 },
    next(){ this.currentIndex = (this.currentIndex + 1) % this.images.length }
  }"

class="relative px-2 pb-2 md:pb-14 lg:pb-20">

    <div class="flex flex-col items-center justify-center w-full mt-10 md:mt-14">
        <x-parts.breadcrumbs :pageTitle="__('pages.rooms')" />

        <div class="flex flex-col items-center justify-center mt-3 md:mt-0">
            <img src="{{ asset('images/svg/tradicija-t-logo.svg') }}" class="size-12 md:size-14 xl:size-16"
                alt="Restoran Tradicija - Banja Luka">
            <div class="py-1 mt-2 border-l-8 border-primary">
                <h1 class="ml-3 text-3xl tracking-tight text-center font-base sm:text-4xl md:text-5xl">
                    @lang('messages.accommodation')
                </h1>
            </div>
            <p class="md:text-xl">@lang('messages.restoran-tradicija') - Banja Luka</p>
            {{-- <div class="w-full max-w-6xl px-4 pt-6 mx-auto sm:w-5/6 md:w-4/5 lg:w-3/4">
                <p class="">@lang('pages.cuisine-description')</p>
            </div> --}}
        </div>
    </div>


{{-- ====== MOB: swipe samo, bez modala ====== --}}
  <div
    x-data="{
      currentIndex: 0,
      updateIndex(){
        const c = $refs.imageContainer;
        const w = c.getBoundingClientRect().width || 1;
        this.currentIndex = Math.round(c.scrollLeft / w);
      }
    }"
    class="relative w-full mt-12 overflow-hidden md:hidden"
  >
    <div x-ref="imageContainer" @scroll.debounce.100ms="updateIndex()" class="flex overflow-x-auto snap-x snap-mandatory">
      <div class="flex-shrink-0 w-full h-72 snap-center snap-always sm:h-80">
        <img src="{{ asset($featuredImage) }}" class="object-cover w-full h-full" alt="Soba">
      </div>
      @foreach ($addedImages as $img)
        <div class="flex-shrink-0 w-full h-72 snap-center snap-always sm:h-80">
          <img src="{{ asset($img) }}" class="object-cover w-full h-full" alt="Soba">
        </div>
      @endforeach
    </div>

    <span
      class="absolute bottom-6 right-0 z-20 m-2 rounded-md bg-primary px-2.5 pb-0.5 pt-1 font-semibold text-white"
      x-text="(currentIndex + 1) + ' / ' + {{ count($photos) }}"
    ></span>
  </div>

  {{-- ====== md-lg: 1 velika + 2 desno (otvara modal) ====== --}}
  <div class="hidden w-full gap-2 px-2 pt-4 md:px-0 md:flex xl:hidden h-96">
    <div class="w-2/3 h-full overflow-hidden rounded-xl">
      <div class="h-full cursor-pointer" @click="modalOpen = true; currentIndex = 0">
        <img src="{{ asset($featuredImage) }}" alt="Soba"
             class="object-cover w-full h-full duration-300 hover:scale-105 will-change-transform">
      </div>
    </div>

    <div class="flex-1 h-full">
      <div class="grid h-full grid-cols-1 grid-rows-2 gap-2">
        @foreach (array_slice($addedImages, 0, 2) as $i => $img)
          <div class="relative h-full overflow-hidden cursor-pointer rounded-xl"
               @click="modalOpen = true; currentIndex = {{ $i + 1 }}">
            <img src="{{ asset($img) }}" alt="Soba"
                 class="object-cover w-full h-full duration-300 hover:scale-105 will-change-transform">
          </div>
        @endforeach
      </div>
    </div>
  </div>

  {{-- ====== xl+: 1 velika + 4 desno (2x2) (otvara modal) ====== --}}
  <div class="hidden w-full gap-3 pt-4 xl:flex h-96">
    <div class="w-1/2 h-full overflow-hidden rounded-xl">
      <div class="h-full cursor-pointer" @click="modalOpen = true; currentIndex = 0">
        <img src="{{ asset($featuredImage) }}" alt="Soba"
             class="object-cover w-full h-full duration-300 hover:scale-105 will-change-transform">
      </div>
    </div>

    <div class="flex-1 h-full">
      <div class="grid h-full grid-cols-2 grid-rows-2 gap-3">
        @foreach (array_slice($addedImages, 0, 4) as $i => $img)
          <div class="relative h-full overflow-hidden cursor-pointer rounded-xl"
               @click="modalOpen = true; currentIndex = {{ $i + 1 }}">
            <img src="{{ asset($img) }}" alt="Soba"
                 class="object-cover w-full h-full duration-300 hover:scale-105 will-change-transform">
          </div>
        @endforeach
      </div>
    </div>
  </div>

  {{-- ====== MODAL (samo za md+) ====== --}}
  <div
    x-show="modalOpen"
    x-transition.opacity
    @keydown.escape.window="modalOpen=false"
    class="fixed inset-0 z-50 items-center justify-center hidden md:flex bg-black/90"
    role="dialog" aria-modal="true"
    wire:ignore
  >
    <div class="relative w-full max-w-2xl mx-4 lg:max-w-4xl xl:max-w-5xl" @click.outside="modalOpen=false">
      <button @click="modalOpen=false"
              class="absolute right-2 top-2 z-20 rounded-md bg-gray-800/80 p-1.5 text-white hover:bg-gray-700">✕</button>

      <span class="absolute z-20 px-2 py-1 text-sm text-white rounded-md left-2 top-2 bg-gray-800/80">
        <span x-text="(currentIndex + 1)"></span> / <span x-text="images.length"></span>
      </span>

      <div class="relative overflow-hidden rounded-lg">
        <img :src="images[currentIndex].src" :alt="'Soba ' + (currentIndex + 1)"
             class="max-h-[80svh] w-full object-contain">
      </div>

      <div class="absolute inset-0 flex items-center justify-between">
        <button class="px-3 py-4 ml-1 rounded-lg bg-gray-800/60 text-white/90 hover:bg-gray-700/70"
                @click.stop="prev()">&#10094;</button>
        <button class="px-3 py-4 mr-1 rounded-lg bg-gray-800/60 text-white/90 hover:bg-gray-700/70"
                @click.stop="next()">&#10095;</button>
      </div>

      <div class="flex gap-2 mt-3 overflow-x-auto">
        <template x-for="(image, index) in images" :key="index">
          <img :src="image.src" :alt="'Soba ' + (index + 1)"
               @click.stop="currentIndex = index"
               class="object-cover w-24 h-20 rounded-lg cursor-pointer opacity-80 hover:opacity-100">
        </template>
      </div>
    </div>
  </div>

</div>
