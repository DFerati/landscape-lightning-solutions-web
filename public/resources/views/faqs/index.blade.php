<div>
    <section class="relative py-16 -mt-20 overflow-hidden text-white bg-gray-800 px-4">
        <div class="h-20"></div>
        <div
            class="absolute animate-[spin_8s_linear_infinite] right-0 w-1/3 border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
        </div>
        <div
            class="absolute animate-[spin_6s_linear_infinite] right-0 w-1/2 border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
        </div>
        <div
            class="absolute animate-[spin_4s_linear_infinite] right-0 w-2/3 border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
        </div>
        <div
            class="absolute animate-[spin_2s_linear_infinite] right-0 w-full border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
        </div>
        <div class="max-w-screen-2xl mx-auto container relative">
            <header>
                <h1 class="mt-8 text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tighter max-w-[20ch]">
                    Our Most Asked Questions
                </h1>
            </header>
        </div>
    </section>
    <main x-data="{ openQuestions: [], toggleQuestion(index) { if (this.openQuestions.includes(index)) { this.openQuestions = this.openQuestions.filter(item => item !== index); } else { this.openQuestions.push(index); } } }" class="py-16 text-white bg-gradient-to-br from-gray-800 to-gray-900 overflow-hidden px-4">
        <div class="max-w-screen-2xl mx-auto container">
            <div class="mb-4">
                <p class="font-medium text-primary-400">Frequently Asked Questions</p>
            </div>
            <ul class="grid gap-4 md:gap-8 md:grid-cols-2">
                <li class="col-span-2 md:col-span-2 w-full rounded-md p-4 bg-gray-800 border border-gray-700">
                    <header class="flex items-center gap-2">
                        <h2 class="text-xl font-bold grow">What you should know about...</h2>
                    </header>
                    <br>
                    <ul>
                        <template x-for="(question, index) in questions" :key="index">
                            <li class="border border-gray-700 p-4 rounded-lg mb-4">
                                <button class="w-full text-left" @click="toggleQuestion(index)">
                                    <p class="text-xl font-bold grow" x-text="question.title"></p>
                                    <p class="font-medium text-primary-400" x-text="question.question"></p>
                                </button>
                                <div x-show="openQuestions.includes(index)" x-cloak class="text-sm text-gray-500" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                                    <p x-text="question.answer"></p>
                                </div>
                            </li>
                        </template>
                    </ul>
                </li>
            </ul>
        </div>
    </main>

    <script>
        const questions = [
            {
                title: 'Consultation.',
                question: 'Do you give free estimates?',
                answer: 'Absolutely! Our designers will meet you at your property to discuss a custom design based on your needs. We will show you the products we use and walk through each detail. We are happy to provide a free estimate.'
            },
            {
                title: 'Location.',
                question: 'In what areas do you provide your outdoor lighting services?',
                answer: 'We install our outdoor lighting systems all over Wisconsin and Illinois. We also travel should you have a home elsewhere you would like us to light. We have thus far designed lighting in Wisconsin, Illinois, Iowa, and Minnesota.'
            },
            {
                title: 'Installation.',
                question: 'Will the installation damage our landscaping?',
                answer: 'Our professional installation team is as minimally invasive as possible. We don’t use trenching machines, and most cuts in the lawn are gone in 1-2 weeks.'
            },
            {
                title: 'Maintenance.',
                question: 'What happens when the lamps burn out or the entire system does not come on?',
                answer: 'Just call or email us, and we will be out to your property to fix the problem as soon as possible. Our maintenance team will replace all burned out lamps for the first year at no cost, as well as troubleshoot any system failures.'
            },
            {
                title: 'More Maintenance.',
                question: 'Will I have to turn on/off the system every night?',
                answer: 'No, every system is designed to turn on at dark and turn off at the time you designate.'
            },
            {
                title: 'Lightning Usage.',
                question: 'Will adding these lights use up a lot of energy?',
                answer: 'We only install low voltage lighting systems that are very efficient and use 66% less electricity than line voltage systems.'
            },
            {
                title: 'Why we stand out.',
                question: 'Why should I buy from you?',
                answer: 'Tota Lighting only installs top-of-the-line products at a very competitive price. We provide servicing and maintenance of the system we install for the first year at no cost to you.'
            },
        ];

        document.addEventListener('alpine:init', () => {
            Alpine.data('questions', () => ({
                questions,
            }));
        });
    </script>
</div>
