<div>
    <ul role="list" class="divide-y divide-gray-100">
        @foreach($folders as $folder)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $folder->name }}</p>
                    </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900"> {{$folder->notes->count()}} </p>
{{--                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>--}}
                </div>
            </li>
        @endforeach
    </ul>
</div>
