<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create a new account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $pages[$currentPage]['heading'] }}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $pages[$currentPage]['subheading'] }}</p>
                    </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        @if ($errors->isNotEmpty())
                            <div class="relative px-4 py-3 mb-4 text-sm text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                                <strong class="font-bold">Oops!</strong>
                                <span class="block sm:inline">There are some errors with your submission.</span>
                            </div>
                        @endif
                        {{-- @if ($success) --}}
                            {{-- <div class="relative px-4 py-3 mb-4 text-sm text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
                                <span class="block sm:inline"> dadadada </span>
                                <span wire:click="resetSuccess" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="w-6 h-6 text-green-500 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                </span>
                            </div> --}}
                        {{-- @endif --}}
                        <form wire:submit.prevent="submit">
                            <div class="overflow-hidden shadow sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    @if ($currentPage === 1)
                                        <div class="flex flex-col">
                                            <div class="w-full py-2">
                                                <label for="full_name" class="block text-sm font-medium text-gray-700">First name</label>
                                                <input wire:model.lazy="firstName" type="text" name="full_name" id="full_name" autocomplete="given-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @error('fullName') <span class="mt-1 text-xs text-red-500">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Last name</label>
                                                <input wire:model.lazy="lastName" type="text" name="jenis_kelamin" id="jenis_kelamin" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @error('jenisKelamin') <span class="mt-1 text-xs text-red-500">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                                                <input wire:model.lazy="email" type="text" name="email_address" id="email_address" autocomplete="email" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @error('email') <span class="mt-1 text-xs text-red-500">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    @elseif ($currentPage === 2)
                                        <div class="flex flex-col">
                                            <div class="w-full py-2">
                                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                                <input wire:model.lazy="password" type="password" name="password" id="password" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @error('password') <span class="mt-1 text-xs text-red-500">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                                                <input wire:model.lazy="confirmPassword" type="password" name="password_confirmation" id="password_confirmation" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @error('confirmPassword') <span class="mt-1 text-xs text-red-500">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex items-center justify-between px-4 py-3 text-right bg-gray-50 sm:px-6">
                                    @if ($currentPage === 1)
                                        <div></div>
                                    @else
                                        <button wire:click="goToPreviousPage" type="button" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-gray-400 border border-transparent rounded-md shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                            Back
                                        </button>
                                    @endif
                                    @if ($currentPage === count($pages))
                                        <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Submit
                                        </button>
                                    @else
                                        <button wire:click="goToNextPage" type="button" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Next
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
