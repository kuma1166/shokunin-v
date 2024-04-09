<x-app-layout>
<section class="max-w-4xl mx-auto p-5">
    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('contact.confirm') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        {{-- show.blade.phpのデータを保持 --}}
        <input type="hidden" name="packageName" value="{{ request('packageName') }}">
        <input type="hidden" name="startDate" value="{{ request('startDate') }}">
        <input type="hidden" name="endDate" value="{{ request('endDate') }}">
        <input type="hidden" name="adultPrice" value="{{ request('adultPrice') }}">
        <input type="hidden" name="childPrice" value="{{ request('childPrice') }}">
        <input type="hidden" name="image" value="{{ request('image') }}">
        <input type="hidden" name="description" value="{{ request('description') }}">
        <input type="hidden" name="plan" value="{{ request('plan') }}">
        <input type="hidden" name="sushiArtisanName" value="{{ request('sushiArtisanName') }}">

        {{-- 入力フォーム --}}
        <div class="mb-4">
            <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date<span class="text-red-500"> indispensable</span></label>
            <input id="date" type="date" name="date" value="{{ old('date') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('date')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="number" class="block text-gray-700 text-sm font-bold mb-2">Number of participants<span class="text-red-500"> indispensable</span></label>
            <input id="number" type="number" name="number" value="{{ old('number') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('number')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="company" class="block text-gray-700 text-sm font-bold mb-2">Company Name</label>
            <input id="company" type="text" name="company" value="{{ old('company') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($errors->has('company'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('company') }}</p>
            @endif
        </div>

        <div class="flex space-x-4 mb-4">
            <div class="w-1/2">
                <label for="FirstName" class="block text-gray-700 text-sm font-bold mb-2">First Name<span class="text-red-500"> indispensable</span></label>
                <input id="FirstName" type="text" name="FirstName" value="{{ old('FirstName') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if($errors->has('FirstName'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('FirstName') }}</p>
                @endif
            </div>

            <div class="w-1/2">
                <label for="LastName" class="block text-gray-700 text-sm font-bold mb-2">Last Name<span class="text-red-500"> indispensable</span></label>
                <input id="LastName" type="text" name="LastName" value="{{ old('LastName') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('LastName')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone number</label>
            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('phone')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail address<span class="text-red-500"> indispensable</span></label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($errors->has('email'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="mb-4">
            <label for="allergy" class="block text-gray-700 text-sm font-bold mb-2">allergy</label>
            <input id="allergy" type="text" name="allergy" value="{{ old('allergy') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($errors->has('allergy'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('allergy') }}</p>
            @endif
        </div>

        <div class="mb-4">
            <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Requests, etc.</label>
            <textarea id="body" name="body" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-28" >{{ old('body') }}</textarea>
            @if($errors->has('body'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('body') }}</p>
            @endif
        </div>
        
{{--
        <div class="mb-4">
            <label for="upload" class="block text-gray-700 text-sm font-bold mb-2">Photos of WOW experiences</label>
            <form method="POST" action="{{ route('contact.upload') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
            </form>
        </div> --}}

        <div class="flex items-center justify-between">
            <button type="submit" name="submitBtnVal" value="confirm" class="return_btn py-2 px-4 rounded focus:outline-none focus:shadow-outline">Confirmation</button>
        </div>
    </form>
</section>
</x-app-layout>
