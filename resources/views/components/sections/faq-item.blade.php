<!-- FAQ Item Component -->
<div 
    class="faq-item bg-gradient-to-br from-indigo-50 to-white border-2 border-indigo-200 rounded-xl p-6 md:p-8 hover:shadow-lg transition-shadow duration-300 cursor-pointer"
    onclick="toggleFaq(this)"
>
    <!-- Question Header -->
    <div class="flex items-start justify-between gap-4">
        <h3 class="text-lg md:text-xl font-semibold text-indigo-900 text-left flex-1">
            {{ __($question) }}
        </h3>
        <div class="faq-icon flex-shrink-0 text-indigo-700 text-2xl transition-transform duration-300">
            <span class="inline-block">+</span>
        </div>
    </div>

    <!-- Answer (Hidden by default) -->
    <div class="faq-answer hidden mt-4 text-gray-600 text-base leading-relaxed">
        {{ __($answer) }}
    </div>
</div>
