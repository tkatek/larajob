<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
    
    <div class="mx-4">
        <div class="bg-white p-10 rounded-lg shadow-md border border-gray-200 text-center">
            <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            
            <ul class="flex justify-center mb-6">
                 <li class="bg-black text-white rounded-xl px-3 py-1 mr-2 text-xs">
                    {{ $listing->tags }}
                </li>
                <li class="bg-black text-white rounded-xl px-3 py-1 mr-2 text-xs">
                    {{ $listing->location }}
                </li>
            </ul>

            <div class="border border-gray-200 w-full mb-6"></div>
            
            <div class="text-lg space-y-6">
                <h3 class="text-3xl font-bold mb-4">Job Description</h3>
                <div class="text-left">
                    {{ $listing->description }}
                </div>
                
                <a href="mailto:{{ $listing->email }}" class="block bg-red-500 text-white mt-6 py-2 rounded-xl hover:opacity-80">
                    Contact Employer
                </a>
            </div>
        </div>
    </div>
</x-layout>