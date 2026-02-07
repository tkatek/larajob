<x-layout>


<form action="/">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search Laravel, Backend, etc..."
        />
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
            >
                Search
            </button>
        </div>
    </div>
</form>



    <div class="grid gap-6 lg:grid-cols-2">
        @foreach($listings as $listing)
            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md border border-gray-200">
                <h2 class="text-2xl font-bold mb-2">
                    <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
                </h2>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                
                <ul class="flex">
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2 text-xs">
                        <a href="#">{{ $listing->location }}</a>
                    </li>
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2 text-xs">
                        <a href="#">{{ $listing->tags }}</a>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</x-layout>