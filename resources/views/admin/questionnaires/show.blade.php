<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('SIMONEV-PPG | Questionnaire') }}
            </h2>
    
            <a class="inline-flex items-center px-4 py-0 bg-green-500 border border-transparent rounded-md font-semibold text-xs 
            text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring 
            ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="/dashboard/questionnaire/{{ $questionnaire->id }}/questions/create">
            <i class="fas fa-user-plus"></i>
                Add Questions
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        
        <!-- Questionnaire Title -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-6 bg-white border-b border-gray-200">
                    <div class="text-xl font-semibold">{{ $questionnaire->title }}</div>
                    <div class="text-sm">List of Questions</div>
                </div>
            </div>
        </div>
        
        <!-- Questions Card -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-2">
            @foreach ($questionnaire->questions as $question)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-between p-6 bg-white border-b border-gray-200">
                        <div class="">{{ $loop->iteration }}. {{ $question->question }}</div>
                        <div class="flex space-x-2 justify-center">
                            <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                        </div>
                    </div>

                    <div class="flex p-6 ml-10 bg-white border-b border-gray-200">
                        <div class="flex justify-center">
                            @foreach ($question->answers as $answer)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                            type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">{{ $answer->answer }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
