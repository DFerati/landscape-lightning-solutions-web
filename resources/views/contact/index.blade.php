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
                    Give us a Call.
                </h1>
            </header>
        </div>
    </section>
    <div class="h-px bg-gradient-to-r from-gray-800 via-primary-400 to-gray-800"></div>
    <main class="py-16 text-white bg-gradient-to-br from-gray-800 to-gray-900 px-4">
        <div class="max-w-screen-2xl mx-auto container">
            <div class="mb-4">
                <p class="font-medium text-primary-400">Contact Us</p>
            </div>
            <h2 class="text-3xl font-bold mb-8">Do you need assistance or have any questions? <br>
                We're here to help!
            </h2>
            <ul class="grid gap-4 md:gap-8 md:grid-cols-2">
                <li class="col-span-2 md:col-span-1 w-full p-4 border rounded-lg shadow sm:p-8 bg-gray-800 border-gray-700">
                    <header class="flex items-center gap-2">
                        <div
                            class="flex items-center justify-center p-2 bg-primary-500 bg-opacity-10 border border-primary-500/30 rounded-lg">
                            <x:icons.information class="w-8 h-8 shrink-0 text-primary-500"/>
                        </div>
                        <h2 class="text-xl font-bold grow">Our Contact Information</h2>
                    </header>
                    <br>
                    <ul class="grid md:grid-cols-2">
                        <li class="flex flex-col">
                            <p class="font-medium text-primary-400">
                                Name:
                            </p>
                            <p class="text-sm text-gray-500">
                                Content
                            </p>
                        </li>
                    </ul>
                </li>
                <li class="col-span-2 md:col-span-1 w-full p-4 border rounded-lg shadow sm:p-8 bg-gray-800 border-gray-700">
                    <header class="flex items-center gap-2">
                        <div
                            class="flex items-center justify-center p-2 bg-primary-500 bg-opacity-10 border border-primary-500/30 rounded-lg">
                            <x:icons.mail class="w-8 h-8 shrink-0 text-primary-500"/>
                        </div>
                        <h2 class="text-xl font-bold grow">Where We Are</h2>
                    </header>
                    <br>
                    <ul class="grid md:grid-cols-2">
                        <li class="flex flex-col">
                            <p class="font-medium text-primary-400">
                                Name:
                            </p>
                            <p class="text-sm text-gray-500">
                                Content
                            </p>
                        </li>
                    </ul>
                </li>
                <li class="col-span-2 separator h-px bg-gradient-to-r from-gray-800 via-primary-700 to-gray-800"></li>
                <div>

                </div>
                <li class="col-span-2 w-full p-4 border rounded-lg shadow sm:p-8 bg-gray-800 border-gray-700">
                    <header class="flex items-center gap-2">
                        <div
                            class="flex items-center justify-center p-2 bg-primary-500 bg-opacity-10 border border-primary-500/30 rounded-lg">
                            <x:icons.mail class="w-8 h-8 shrink-0 text-primary-500"/>
                        </div>
                        <h2 class="text-xl font-bold grow">Let's talk !</h2>
                    </header>
                    <br>
                    @if($contactReceived)
                        <div>
                            <h2 class="text-xl font-bold grow">Contact Received</h2>
                            <p>Thank you for your inquiry. We will get back to you soon.</p>
                        </div>
                    @else
                        <form wire:submit.prevent="save">
                            <div class="mb-4">
                                <label class="block text-white" for="name">Your name:</label>
                                <input wire:model.defer="form.name"
                                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-primary-500"
                                       type="text" id="name" name="name" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-white" for="email">Your email address:</label>
                                <input wire:model.defer="form.email"
                                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-primary-500"
                                       type="email" id="email" name="email" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-white" for="phone">Phone:</label>
                                <input wire:model.defer="form.phone"
                                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-primary-500"
                                       type="tel" id="phone" name="phone" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-white" for="city">Address:</label>
                                <input wire:model.defer="form.city"
                                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-primary-500"
                                       type="text" id="city" name="city" required>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-white" for="state">State:</label>
                                    <input wire:model.defer="form.state"
                                           class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-primary-500"
                                           type="text" id="state" name="state" required>
                                </div>
                                <div>
                                    <label class="block text-white" for="zip">Zip code:</label>
                                    <input wire:model.defer="form.zip"
                                           class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-primary-500"
                                           type="text" id="zip" name="zip" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-white" for="type">Type:</label>
                                <select wire:model.defer="form.type"
                                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-primary-500"
                                        id="type" name="type" required>
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="residential">Residential</option>
                                    <option value="commercial">Commercial</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-white" for="description">Brief description of your
                                    message:</label>
                                <textarea wire:model.defer="form.description"
                                          class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-primary-500"
                                          id="description" name="description" rows="4" required></textarea>
                            </div>
                            <button class="w-full px-4 py-2 text-white bg-primary-500 rounded-lg hover:bg-primary-600"
                                    type="submit">Submit
                            </button>
                        </form>
                    @endif
                </li>
            </ul>
        </div>
    </main>
</div>
