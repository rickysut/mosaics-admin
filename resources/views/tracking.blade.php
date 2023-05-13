@extends('layouts.template')

@section('content')
    @if (!empty($tracks))
        <div class="bg-white rounded-lg shadow-md p-6 hidden md:block">
            <h2 class="text-xl font-semibold text-gray-800 border-b pb-2">M B/L or H B/L: <span class="text-blue-500">{{ $track_no }}</span></h2>
            <div class="grid grid-cols-2 gap-4 py-4 ">
                <p class="text-gray-600 px-4">Code : {{ $tracks->code }} - {{ ($tracks->status->description??'') }}</p>
                <p class="text-gray-600 px-4">Time : {{ $tracks->time }}</p>
                <p class="text-gray-600 px-4">Type : {{ $tracks->type }} - {{ ($tracks->typeData->remark??'') }}</p>
                <p class="text-gray-600 px-4">Remark : {{ $tracks->remark }}</p>
            </div>
            <a id="cancelBtn" href="/" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto bg-green-500 hover:bg-green-300">Back</a>
        </div>  
        <div class="bg-white rounded-lg shadow-md p-6 block md:hidden">
          <h2 class="text-xl font-semibold text-gray-800 border-b pb-2">M B/L or H B/L: <span class="text-blue-500">{{ $track_no }}</span></h2>
          <div class="py-4 block ">
            <p class="text-gray-600 px-4">Code : {{ $tracks->code }} - {{ ($tracks->status->description??'') }}</p>
            <p class="text-gray-600 px-4">Time : {{ $tracks->time }}</p>
            <p class="text-gray-600 px-4">Type : {{ $tracks->type }} - {{ ($tracks->typeData->remark??'') }}</p>
            <p class="text-gray-600 px-4">Remark : {{ $tracks->remark }}</p>
          </div>
          <a id="cancelBtn" href="/" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto bg-green-500 hover:bg-green-300">Back</a>
      </div>  
    @else
    <div class="modal relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      
        <div class="fixed inset-0 z-10 overflow-y-auto">
          <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg" >
              <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Not found</h3>
                    <div class="mt-2">
                      <p class="text-sm text-gray-500">M B/L or H B/L: {{ $track_no }} not found!</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <a id="cancelBtn" href="/" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto hover:bg-gray-300">Track Again</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        
    @endif
      
@endsection
@section('scripts')
@parent
    <script>
        
            const cancelBtn = document.getElementById('cancelBtn');
            const modal = document.querySelector('.modal');
        
            function showModal() {
            modal.classList.remove('hidden');
            }
        
            function hideModal() {
            modal.classList.add('hidden');
            }
            // Add event listener to the deactivate button to show the modal

            // Add event listener to the cancel button to hide the modal
            cancelBtn.addEventListener('click', hideModal);
            // hideModal();
    </script>

@endsection
