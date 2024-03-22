<x-app-layout>
  <div class="px-5 py-2">
    <h1 class="text-xl font-bold">{{ $package->name }}</h1>
    <div class="text-xs my-2">Event period： {{ $package->start_date }} 〜 {{ $package->end_date }}</div>

    <div class="flex">
    @foreach ($artisanTypes as $artisanType)
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

    {{-- <div class="reserve_btn my-12 text-center">
      <button onclick="location.href='{{ route('packages.index') }}'"  class="px-16 py-3">Reserve<span class="arrow-right"></span></button>
    </div>
    <div class="max-w-7xl mx-auto"> --}}

    {{-- <select name="sushi_artisan_name" onchange="location = this.value;"> --}}
    <select name="sushi_artisan_name" onchange="location = this.value;" class="custom-select">
      <option value="" selected disabled>Select Sushi Artisan</option>
      @foreach ($sushi_artisans as $sushi_artisan)
        <option value="{{ route('sushi_artisan.show', $sushi_artisan->id) }}">{{ $sushi_artisan->name }}</option>
      @endforeach
    </select>

{{-- <input list="sushi_artisans" name="sushi_artisan_name" class="custom-select" placeholder="Select Sushi Artisan">
<datalist id="sushi_artisans">
    @foreach ($sushi_artisans as $sushi_artisan)
        <option value="{{ $sushi_artisan->name }}">
    @endforeach
</datalist> --}}

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
  </div>
</x-app-layout>
