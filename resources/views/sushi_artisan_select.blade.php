<x-app-layout>
    <div class="sushi-artisan-detail">
        <img src="{{ asset('storage/' . $sushi_artisan->image2) }}" alt="寿司職人の画像">
        <h1 class="text-3xl font-bold">{{ $sushi_artisan->name }}</h1>
    </div>

    <div class="mx-auto my-5 py-3 px-5 w-3/4">
        <h2 class="text-2xl font-bold text-center">About</h2>
        <div class="text-xs py-2 leading-6 description-content">{!! nl2br(e($sushi_artisan->description)) !!}</div>
    </div>
    <div class="mx-auto my-5 py-3 px-5 w-3/4">
        <h2 class="text-2xl font-bold text-center">Career</h2>
        <div class="text-xs py-2 leading-6">{!! nl2br(e($sushi_artisan->career)) !!}</div>
    </div>

<div class="pb-12 flex justify-center space-x-4 px-6">
    <button onclick="window.history.back(); return false;" class="return_btn px-16 py-3">Return</button>
    <form action="{{ route('packages.decision', ['package_id' => $package_id, 'sushi_artisan_id' => $sushi_artisan->id]) }}" method="get">
        <button type="submit" class="return_btn px-16 py-3">Decision</button>
    </form>
</div>

</x-app-layout>
