<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SIMONEV-PPG | Questionnaire') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                          <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                              <h3 class="text-lg font-medium leading-6 text-gray-900">Adding Questionnaire</h3>
                              <p class="mt-1 text-sm text-gray-600">
                                Create questionnaire with interesting title.
                              </p>
                            </div>
                          </div>
                          <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="{{ route('question.store') }}" method="post">
                                @csrf
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-gray-100 sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <label for="question" class="block text-sm font-medium text-gray-700">Question</label>
                                                <input type="text" name="question" id="question" 
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('question') is-invalid @enderror"  value="{{ old('question') }}">
                                                @error('question')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Answer Fill -->
                                            <div class="col-span-6">
                                                <label for="answer1" class="block text-sm font-medium text-gray-700">Choice 1</label>
                                                <input type="text" name="answers[][answer]" id="answer1"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('answers.0.answer') is-invalid @enderror"  value="{{ old('answers.0.answer') }}">
                                                @error('answers.0.answer')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="answer2" class="block text-sm font-medium text-gray-700">Choice 2</label>
                                                <input type="text" name="answers[][answer]" id="answer2"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('answers.1.answer') is-invalid @enderror"  value="{{ old('answers.1.answer') }}">
                                                @error('answers.1.answer')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="answer3" class="block text-sm font-medium text-gray-700">Choice 3</label>
                                                <input type="text" name="answers[][answer]" id="answer3"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('answers.2.answer') is-invalid @enderror"  value="{{ old('answers.2.answer') }}">
                                                @error('answers.2.answer')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="answer4" class="block text-sm font-medium text-gray-700">Choice 4</label>
                                                <input type="text" name="answers[][answer]" id="answer4"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('answers.3.answer') is-invalid @enderror"  value="{{ old('answers.3.answer') }}">
                                                @error('answers.3.answer')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="answer5" class="block text-sm font-medium text-gray-700">Choice 5</label>
                                                <input type="text" name="answers[][answer]" id="answer5"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('answers.4.answer') is-invalid @enderror"  value="{{ old('answers.4.answer') }}">
                                                @error('answers.4.answer')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="answer6" class="block text-sm font-medium text-gray-700">Choice 6</label>
                                                <input type="text" name="answers[][answer]" id="answer6"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('answers.5.answer') is-invalid @enderror"  value="{{ old('answers.5.answer') }}">
                                                @error('answers.5.answer')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="answer7" class="block text-sm font-medium text-gray-700">Choice 7</label>
                                                <input type="text" name="answers[][answer]" id="answer7"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                                                @error('answers.6.answer') is-invalid @enderror"  value="{{ old('answers.6.answer') }}">
                                                @error('answers.6.answer')
                                                    <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Add Question
                                        </button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
