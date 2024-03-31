<x-app-layout>
<form action="{{ route('contact.complete') }}" method="POST">
@csrf
<form action="{{ route('contact.complete') }}" method="POST">
    @csrf
    <input type="hidden" name="date" value="{{ $date }}">
    <input type="hidden" name="number" value="{{ $number }}">
    <input type="hidden" name="packageName" value="{{ $packageName }}">
    <input type="hidden" name="adultPrice" value="{{ $adultPrice }}">
    <input type="hidden" name="childPrice" value="{{ $childPrice }}">
    <input type="hidden" name="image" value="{{ $image }}">
    <input type="hidden" name="description" value="{{ $description }}">
    <input type="hidden" name="plan" value="{{ $plan }}">
    <input type="hidden" name="sushiArtisanName" value="{{ $sushiArtisanName }}">

<section class="max-w-4xl mx-auto p-5 rounded-lg">
    <h2 class="flex items-center justify-center text-xl font-semibold mb-4">Confirmation Screen</h2>

<div>
    <div class="p-4">
        <h2 class="text-lg font-semibold">Package Name</h2>
        <p>{{ $packageName }}</ph2>
    </div>

    <div class="px-4 py-2">
        <img src="{{ asset('storage/' . $image) }}" alt="Package Image" class="w-full h-auto">
    </div>

    <div class="flex items-center px-4 py-2 gap-8">
        <div>
            <h2 class="text-lg font-semibold">Adult Price</h2>
            <p>{{ $adultPrice }} JPY</p>
        </div>
        <div>
            <h2 class="text-lg font-semibold">Child Price</h2>
            <p>{{ $childPrice }} JPY</p>
        </div>
    </div>


    <div class="px-4 py-2">
        <h2 class="text-lg font-semibold">Description</h2>
        <p>{!! nl2br(e($description)) !!}</p>
    </div>

    <div class="px-4 pt-2 pb-4">
        <h2 class="text-lg font-semibold">Plan</h2>
        <p>{!! nl2br(e($plan)) !!}</p>
    </div>


    {{-- <div>
    <h2>Sushi chef</h2>
    <p>{{ $sushiArtisanName }}</p>
</div> --}}

</div>
    <table class="table-auto w-full">
        <tbody>
            <tr class="border-b">
                <td class="px-4 py-2">Date</td>
                <td class="px-4 py-2 font-medium">{{ $date }}</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">Number of participants</td>
                <td class="px-4 py-2 font-medium">{{ $number }}</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">Company</td>
                <td class="px-4 py-2 font-medium">{{ $data['company'] ?? 'N/A'  }}</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">Your name</td>
                <td class="px-4 py-2 font-medium">{{ $data['FirstName'] }} {{ $data['LastName'] }}</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">Phone number</td>
                <td class="px-4 py-2 font-medium">{{ $data['phone'] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">E-mail address</td>
                <td class="px-4 py-2 font-medium">{{ $data['email'] }}</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">Allergy</td>
                <td class="px-4 py-2 font-medium">{{ $data['allergy'] ?? 'N/A' }}</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">Requests, etc.</td>
                <td class="px-4 py-2 font-medium">{{ $data['body'] ?? 'N/A'  }}</td>
            </tr>
        </tbody>
    </table>
    <div class="flex items-center justify-between py-8">
        <button type="submit" name="submitBtnVal" value="confirm" class="return_btn py-2 px-4 rounded focus:outline-none focus:shadow-outline">Request</button>
    </div>
</form>
</section>
</x-app-layout>
