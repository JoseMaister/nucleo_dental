<!-- Frequently Asked Questions Section -->
<section class="relative bg-white my-12 py-16 px-4 md:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-indigo-800 mb-4">
                {{ $title ?? __('messages.faq.title') }}
            </h2>
            @if(isset($intro))
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mt-4">
                {{ $intro }}
            </p>
            @endif
            <div class="w-20 h-1 bg-indigo-700 mx-auto rounded mt-6"></div>
        </div>

        <!-- FAQ Grid -->
        <div class="grid grid-cols-1 md:grid-cols-1 gap-8 lg:gap-10">
            @props(['faqFile' => 'data/faq.json'])
            @php
                $faqData = json_decode(file_get_contents(resource_path($faqFile)), true);
                $questions = $faqData['questions'] ?? [];
            @endphp

            @foreach($questions as $index => $item)
                @include('components.sections.faq-item', [
                    'question' => $item['question'],
                    'answer' => $item['answer']
                ])
            @endforeach
        </div>

    </div>
</section>

<script>
    function toggleFaq(element) {
        // Get the answer element and icon
        const answer = element.querySelector('.faq-answer');
        const icon = element.querySelector('.faq-icon span');
        const answerContent = answer.querySelector('div');
        
        // Check if currently open
        const isOpen = !answer.classList.contains('max-h-0');
        
        if (isOpen) {
            // Close the FAQ
            answer.style.maxHeight = '0px';
            answer.classList.remove('max-h-96', 'max-h-[500px]', 'lg:max-h-[400px]');
            answer.classList.add('max-h-0');
            
            // Rotate icon back
            icon.textContent = '+';
            icon.style.transform = 'rotate(0deg) scale(1)';
            
            // Remove active styling
            element.classList.remove('bg-indigo-100', 'border-indigo-400', 'shadow-xl');
            element.classList.add('border-indigo-200');
        } else {
            // Open the FAQ
            // Get the natural height of the content
            const contentHeight = answerContent.scrollHeight;
            answer.style.maxHeight = contentHeight + 'px';
            
            // Add responsive max-height classes for different screen sizes
            answer.classList.remove('max-h-0');
            answer.classList.add('max-h-96', 'lg:max-h-[400px]');
            
            // Rotate icon
            icon.textContent = '−';
            icon.style.transform = 'rotate(180deg) scale(1.1)';
            
            // Add active styling
            element.classList.add('bg-indigo-100', 'border-indigo-400', 'shadow-xl');
            element.classList.remove('border-indigo-200');
            
            // Smooth scroll into view if needed
            setTimeout(() => {
                element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 100);
        }
        
        // Add ripple effect
        addRippleEffect(element);
    }

    // Optional: Close all other FAQs when opening a new one (accordion behavior)
    function toggleFaqExclusive(element) {
        const allFaqItems = document.querySelectorAll('.faq-item');
        
        // Close all other FAQs
        allFaqItems.forEach(item => {
            if (item !== element) {
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.faq-icon span');
                
                answer.style.maxHeight = '0px';
                answer.classList.remove('max-h-96', 'max-h-[500px]', 'lg:max-h-[400px]');
                answer.classList.add('max-h-0');
                
                icon.textContent = '+';
                icon.style.transform = 'rotate(0deg) scale(1)';
                
                item.classList.remove('bg-indigo-100', 'border-indigo-400', 'shadow-xl');
                item.classList.add('border-indigo-200');
            }
        });
        
        // Toggle current element
        toggleFaq(element);
    }

    // Add ripple effect for better visual feedback
    function addRippleEffect(element) {
        const ripple = document.createElement('div');
        ripple.className = 'absolute inset-0 bg-indigo-200 opacity-30 rounded-xl pointer-events-none';
        ripple.style.animation = 'ripple 0.6s ease-out';
        
        element.style.position = 'relative';
        element.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    }

    // Add CSS animation for ripple effect
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            0% {
                transform: scale(0.8);
                opacity: 0.5;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }
        
        .faq-answer {
            transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1), 
                        padding 0.3s ease-in-out,
                        opacity 0.3s ease-in-out;
        }
        
        .faq-answer.max-h-0 {
            opacity: 0;
            padding-top: 0;
            padding-bottom: 0;
        }
        
        .faq-answer:not(.max-h-0) {
            opacity: 1;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        
        .faq-icon span {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                        scale 0.3s ease-in-out;
        }
        
        .faq-item {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    `;
    document.head.appendChild(style);
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
