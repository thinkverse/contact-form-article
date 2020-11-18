<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
    <form wire:submit.prevent="submit" class="flex flex-col">
        <label for="name" class="block">
            <span class="text-gray-700">Name</span>
            <input class="block w-full mt-1 form-input" wire:model="name" placeholder="Sherlock Holmes" id="name" type="text" autocomplete="off" required>
        </label>
        @error('name') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

        <label for="email" class="block mt-4">
            <span class="text-gray-700">Email</span>
            <input class="block w-full mt-1 form-input" wire:model="email" placeholder="detective@bakerst.io" id="email" autocomplete="off" type="email" required>
        </label>
        @error('email') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

        <label for="phone" class="hidden sm:block mt-4">
            <span class="text-gray-700">Phone</span>
            <input class="block w-full mt-1 form-input" wire:model="phone" placeholder="+1 240-824-1243" id="phone" autocomplete="off" type="tel">
        </label>
        @error('phone') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

        <div class="hidden sm:block mt-4">
            <span class="text-gray-700">Preferred Way of Contact</span>
            <div class="mt-2 text-gray-500">
                <label class="inline-flex items-center cursor-pointer">
                    <input class="form-radio" type="radio" wire:model="preferred" name="preferred" value="0" checked>
                    <span class="ml-2 select-none">Email</span>
                </label>
                <label class="inline-flex items-center ml-6 cursor-pointer">
                    <input class="form-radio" type="radio" wire:model="preferred" name="preferred" value="1">
                    <span class="ml-2 select-none">Phone</span>
                </label>
            </div>
            @error('preferred') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
        </div>

        <label class="block mt-4">
            <span class="text-gray-700">Message</span>
            <textarea class="block w-full mt-1 form-textarea" wire:model="message" rows="3"
                placeholder="Why not write us a little message."></textarea>
        </label>
        @error('message') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

        <button class="px-4 py-2 mt-8 font-semibold text-gray-800 bg-white border border-gray-300 rounded shadow hover:bg-gray-100">
            Send us a message
        </button>
    </form>
</div>
