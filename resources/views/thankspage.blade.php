<x-app-layout>
<div class="container mt-5">
    <div class="text-center">
        <h1>ご注文ありがとうございます！</h1>
        <p class="mt-3">ご注文が正常に完了しました。</p>
        <p>注文番号: {{ $order->id }}</p>
        <div class="mt-4">
            <a href="{{ route('order.details', ['orderId' => $order->id]) }}" class="btn btn-primary">注文詳細を見る</a>
            <a href="{{ url('/') }}" class="btn btn-secondary">トップページに戻る</a>
        </div>
    </div>
</div>
</x-app-layout>
