<!-- Frequently Asked Questions Section -->
<section class="relative bg-white my-12 py-16 px-4 md:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-4">
                {{ __('messages.faq.title') }}
            </h2>
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded"></div>
        </div>

        <!-- FAQ Grid -->
        <div class="grid grid-cols-1 md:grid-cols-1 gap-8 lg:gap-10">
            @php
                $faqData = json_decode(file_get_contents(resource_path('data/faq.json')), true);
                $questions = $faqData['questions'] ?? [];
            @endphp

            @foreach($questions as $index => $item)
                @include('components.sections.faq-item', [
                    'question' => $item['question'],
                    'answer' => $item['answer']
                ])
            @endforeach
        </div>

        <!-- Contact CTA -->
        <div class="text-center mt-16">
            <p class="text-gray-600 text-lg mb-6">
                {{ __('messages.services_banner.contact_us') }}
            </p>
            <a 
                href="{{ route('contact') }}"
                class="inline-block bg-indigo-700 text-white font-bold py-3 px-8 rounded-lg hover:bg-indigo-800 transition-colors duration-300"
            >
                {{ __('messages.contact.form.submit') }}
            </a>
        </div>
    </div>
</section>

<script>
    function toggleFaq(element) {
        // Get the answer element
        const answer = element.querySelector('.faq-answer');
        const icon = element.querySelector('.faq-icon span');

        // Toggle visibility
        answer.classList.toggle('hidden');
        
        // Rotate the icon
        if (icon.textContent === '+') {
            icon.textContent = '−';
            icon.style.transform = 'rotate(180deg)';
        } else {
            icon.textContent = '+';
            icon.style.transform = 'rotate(0deg)';
        }

        // Add/remove active styling
        element.classList.toggle('bg-indigo-100');
        element.classList.toggle('border-indigo-400');

        // Smooth scroll into view if needed
        if (!answer.classList.contains('hidden')) {
            element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }

    // Optional: Close all other FAQs when opening a new one
    function toggleFaqExclusive(element) {
        const allFaqItems = document.querySelectorAll('.faq-item');
        
        allFaqItems.forEach(item => {
            if (item !== element) {
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.faq-icon span');
                answer.classList.add('hidden');
                icon.textContent = '+';
                icon.style.transform = 'rotate(0deg)';
                item.classList.remove('bg-indigo-100', 'border-indigo-400');
            }
        });
        
        // Toggle current element
        const answer = element.querySelector('.faq-answer');
        const icon = element.querySelector('.faq-icon span');

        answer.classList.toggle('hidden');
        
        if (icon.textContent === '+') {
            icon.textContent = '−';
            icon.style.transform = 'rotate(180deg)';
        } else {
            icon.textContent = '+';
            icon.style.transform = 'rotate(0deg)';
        }

        element.classList.toggle('bg-indigo-100');
        element.classList.toggle('border-indigo-400');

        if (!answer.classList.contains('hidden')) {
            element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }
</script>

<style>
    .faq-icon {
        line-height: 1;
    }

    .faq-item {
        transition: all 0.3s ease;
    }

    .faq-item:hover {
        transform: translateY(-2px);
    }
</style>
