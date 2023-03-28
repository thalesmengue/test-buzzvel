@if(empty($qrcode))
    <div>
        <div class="flex items-center justify-center mt-48">
            <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
                <form wire:submit.prevent="generate">
                    @csrf
                    <div>
                        <div class="mt-2 flex rounded-md shadow-sm">
                            <label for="name"
                                   class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 px-3 text-gray-500 sm:text-sm">Name</label>
                            <input type="text" name="name" id="name" wire:model="name"
                                   class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   placeholder="username">
                        </div>
                        @error('name')
                        <div class="mt-2 text-sm text-red-500">
                            <span>{{ $message }}</span>
                        </div>
                        @enderror
                        <div class="mt-8 flex rounded-md shadow-sm">
                            <label for="linkedin"
                                   class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 px-3 text-gray-500 sm:text-sm">Linkedin
                                URL</label>
                            <input type="text" name="linkedin" id="linkedin" wire:model="linkedin"
                                   class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   placeholder="www.example.com">
                        </div>
                        @error('linkedin')
                        <div class="mt-2 text-red-500 text-sm">
                            <span class="">{{ $message }}</span>
                        </div>
                        @enderror
                        <div class="mt-8 flex rounded-md shadow-sm">
                            <label for="github"
                                   class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 px-3 text-gray-500 sm:text-sm">Github
                                URL</label>
                            <input type="text" name="github" id="github" wire:model="github"
                                   class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   placeholder="www.example.com">
                        </div>
                    </div>
                    @error('github')
                    <div class="mt-2 text-red-500 text-sm">
                        <span>{{ $message }}</span>
                    </div>
                    @enderror
                    <div class="flex justify-center items-center">
                        <button class="px-6 py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-indigo-900"
                                type="button"
                                wire:click="generate"> generate
                        </button>
                    </div>
                </form>
            </div>
            @elseif(!empty($qrcode))
                <div class="py-14">
                    <div class="flex justify-center text-2xl">
                        Hello {{ $name }} 👋
                    </div>
                    <div class="flex justify-center mt-8 text-2xl">
                        Scan the QR Code below to access your profile 👇
                    </div>
                    <div class="flex justify-center mt-8">
                        <img src="data:image/png;base64, {!! $qrcode !!}" alt="qrcode">
                    </div>
                </div>
        </div>
    </div>
@endif
