<div class="max-w-3xl mx-auto mt-4">
    <div class="space-y-4">
        @foreach ($faqs as $faq)
        <div x-data="{ open: false }" class="border-b border-gray-200 pb-1">
            <button @click="open = !open" class="w-full text-left flex justify-between items-center py-1 text-md font-semibold text-gray-700 hover:text-white hover:bg-blue-700 px-2 transition-all duration-300 rounded">
                {{ $faq['question'] }}
                <span x-show="!open" class="transition-transform duration-200">+</span>
                <span x-show="open" class="transition-transform duration-200">-</span>
            </button>
            <div x-show="open" x-transition.duration.200ms class="overflow-hidden">
                <p class="text-gray-600 mt-2">{{ $faq['answer'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>