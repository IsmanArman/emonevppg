<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('SIMONEV-PPG | Questionnaires') }}
            </h2>
    
            <a class="inline-flex items-center px-4 py-0 bg-green-500 border border-transparent rounded-md font-semibold text-xs 
            text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring 
            ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('questionnaire.create') }}">
            <i class="fas fa-user-plus"></i>
                Add Questionnaire
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full mb-4">
                                <thead class="bg-gray-100 border-b">
                                  <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      #
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Title
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Purpose
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      Action
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($questionnaires as $questionnaire)
                                        <tr class="border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $questionnaire->id }}</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $questionnaire->title }}</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $questionnaire->purpose }}</td>
                                            <td class="text-smfont-light px-6 py-4 whitespace-nowrap">
                                                <a href="{{ route('questionnaire.show',$questionnaire->id) }}" class="text-blue-500"><i class="fas fa-eye"></i></a>
                                                {{-- <a href="{{ route('questionnaire.edit',$questionnaire->id) }}" class="text-green-500"><i class="fas fa-edit"></i></a> --}}
                                                <button type="button" class="text-red-500" 
                                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-questionnaire-form-{{ $questionnaire->id }}').submit()">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>

                                                <form id="delete-questionnaire-form-{{ $questionnaire->id }}" action="{{ route('questionnaire.destroy', $questionnaire->id) }}" method="post">
                                                    @csrf
                                                    @method("delete")
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                              </table>
                              {{-- {{ $questionnaire->links() }} --}}
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
