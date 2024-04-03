<x-app-layout>
    <div class="px-5 py-2">
        <h1 class="text-xl font-bold">{{ $package->name }}</h1>
        <div class="text-xs my-2">Event eriod： {{ $package->start_date }} 〜 {{ $package->end_date }}</div>

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
        <div class="text-xs">Adult {{ $package->adult_price }} JPY（Child {{ $package->child_price }} JPY）</div>
        <div class="my-3"><img src="{{ asset('storage/' . $package->image) }}" alt="パッケージ画像" width=100%></div>
        <div class="my-2"><img src="{{ asset('storage/WOW.png') }}"><span class="text-xs font-bold">WOW</span></div>
        <div class="text-xs break-words whitespace-pre-wrap">{!! nl2br(e($package->description)) !!}</div>
        <div id="content" class="mx-auto my-5 py-3 px-5 w-3/4">
            <h2 class="text-base font-bold text-center">Content</h2>
            <div class="text-xs py-2 leading-6">{!! nl2br(e($package->plan)) !!}</div>
        </div>

        <div class="my-8">
            <select name="sushi_artisan_name" onchange="location = this.value;" class="custom-select">
                <option value="" selected disabled>Select Sushi Artisan</option>
                @foreach ($sushi_artisans as $sushi_artisan)
                    <option
                        value="{{ route('sushi_artisan.select', ['package_id' => $package->id, 'sushi_artisan_id' => $sushi_artisan->id]) }}">
                        {{ $sushi_artisan->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- <div class="my-8">
        <select name="sushi_artisan_name" class="custom-select">
            <option value="" selected disabled>Select Sushi Artisan</option>
            @foreach ($sushi_artisans as $sushi_artisan)
                <option value="{{ $sushi_artisan->id }}">{{ $sushi_artisan->name }}</option>
            @endforeach
        </select>
    </div> --}}
    
@if(isset($sushi_artisan_row))
    <div class="artisan-area flex my-4 py-4 px-3">
        <div class="w-1/3">
            <img src="{{ asset('storage/' . $sushi_artisan_row->image) }}" alt="">
        </div>
        <div class="w-2/3">
            <div class="text-base font-bold">{{ $sushi_artisan_row->name }}</div>
            <div class="text-xs break-all my-2">{{ $sushi_artisan_row->description }}</div>
            <div class="detail_btn text-right">
                <button class="text-xs px-5 py-1" onclick="location.href='dummy' ">detail</button>
            </div>
        </div>
    </div>
@endif

      {{-- 久保ちゃん追加分 --}}
      {{-- <div class="artisan-area flex my-4 py-4 px-3">
          <div class="w-1/3">
              <img src="{{ asset('storage/' . $sushi_artisan_row->image) }}" alt="">
          </div>
          <div class="w-2/3">
              <div class="text-base font-bold">{{ $sushi_artisan_row->name }}</div>
              <div class="text-xs break-all my-2">{{ $sushi_artisan_row->description }}</div>
              <div class="detail_btn text-right">
                  <button class="text-xs px-5 py-1" onclick="location.href='dummy' ">detail</button>
              </div>
          </div>
      </div> --}}

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

        <div class="my-8">
            <a
                href="{{ route('contact', [
                    'packageName' => $package->name,
                    'adultPrice' => $package->adult_price,
                    'childPrice' => $package->child_price,
                    'image' => $package->image,
                    'description' => $package->description,
                    'plan' => $package->plan,
                ]) }}">
                <button type="button" class="return_btn px-16 py-3">Reserve</button>
            </a>
        </div>
        {{--
    <a href="{{ route('contact') }}">
      <button type="button" class="return_btn px-16 py-3">Reserve</button>
    </a>
</form> --}}
</x-app-layout>
