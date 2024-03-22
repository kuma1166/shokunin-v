<x-app-layout>
  <div class="sushi-artisan-detail">
    <img src="{{ asset('storage/' . $sushi_artisan->image2) }}" alt="寿司職人の画像">
    <h1 class="text-3xl font-bold">{{ $sushi_artisan->name }}</h1>
  </div>
  <div id="description" class="mx-auto my-5 py-3 px-5 w-3/4 description-container">
    {{-- <h2 class="text-base font-bold text-center">Introduction</h2> --}}
    <div class="text-xs py-2 leading-6 description-content">{!! nl2br(e($sushi_artisan->description)) !!}</div>
  </div>

  <div class="mx-auto my-5 py-3 px-5 w-3/4">
  <h2 class="text-2xl font-bold text-center">Career</h2>
  <div class="text-xs py-2 leading-6">{!! nl2br(e($sushi_artisan->career)) !!}</div>
</div>

{{-- <a href="#" onclick="window.history.back(); return false;" class="return_btn px-16 py-3">戻る</a> --}}



<div class="reserve_btn pb-12 text-center">
    <button onclick="window.history.back(); return false;"  class="px-16 py-3">Return</button>
</div>


{{--
  <div id="content" class="mx-auto my-5 py-3 px-5 w-3/4">
    <h2 class="text-base font-bold text-center">Content</h2>
    <div class="text-xs py-2 leading-6">{!! nl2br(e($package->plan)) !!}</div>
  </div> --}}


  {{-- <div class="px-5 py-2">
    <h1 class="text-xl font-bold">{{ $package->name }}</h1>
    <div class="text-xs my-2">Event period： {{ $package->start_date }} 〜 {{ $package->end_date }}</div>
    <div class="flex"> --}}
    {{-- @foreach ($artisanTypes as $artisanType)
    <div class="type flex mr-2 mb-2 px-2 py-1">
        <div><img src="{{ asset('storage/' . $artisanType->image) }}" alt="" width=100%></div>
        <div>
          <div class="text-xs">{{ $artisanType->name }}</div>
        </div>
      </div>
    @endforeach
  </div>
    <div class="text-xs">Adult {{ $package->adult_price }} yen（Child {{ $package->child_price }} yen）</div>
    <div class="my-3"><img src="{{ asset('storage/' . $package->image) }}" alt="パッケージ画像" width=100% ></div>
    <div class="my-2"><img src="{{ asset('storage/WOW.png') }}"><span class="text-xs font-bold">WOW</span></div>
    <div class="text-xs break-words whitespace-pre-wrap">{!! nl2br(e($package->description)) !!}</div>
    <div id="content" class="mx-auto my-5 py-3 px-5 w-3/4">
      <h2 class="text-base font-bold text-center">Content</h2>
      <div class="text-xs py-2 leading-6">{!! nl2br(e($package->plan)) !!}</div>
    </div>
    <div class="reserve_btn my-12 text-center">
      <button onclick="location.href='{{ route('packages.index') }}'"  class="px-16 py-3">Reserve<span class="arrow-right"></span></button>
    </div>
    <div class="max-w-7xl mx-auto">
        @foreach ($package->get_artisans as $artisan)
          <div class="artisan-area flex my-4 py-4 px-3">
            <div class="w-1/3">
              <img src="{{ asset('storage/' . $artisan->image) }}" alt="">
            </div>
            <div class="w-2/3">
              <div class="text-base font-bold">{{ $artisan->name }}</div>
              <div class="text-xs break-all my-2">{{ $artisan->description }}</div>
              <div class="detail_btn text-right">
                <button class="text-xs px-5 py-1" onclick="location.href='dummy' ">detail</button>
              </div>
          </div>
        </div>
        @endforeach
        <div class="reserve_btn my-12 text-center">
          <button onclick="location.href='{{ route('packages.index') }}'"  class="px-16 py-3">Reserve</button>
        </div>
    </div>
  </div> --}}
</x-app-layout>
