<meta name="csrf-token" content="{{ csrf_token() }}">
{{--  <table class="table-auto w-full border-collapse border border-gray-200">
    <thead>
        <tr>
            @foreach($columns as $column)
            <th style="background-color: gold; border: 1px solid black; padding: 8px;">
                    {{ ucfirst($column) }}
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                @foreach($columns as $column)
                    <td class="border border-gray-300 px-4 py-2">{{ $row->$column }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table> --}}



{{-- <div class="my-4">
    
    <h2 class="text-xl font-bold mb-4">Users with Role: {{ ucfirst($role) }}</h2>
    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                @foreach($columns as $column)
                    <th style="background-color: gold; border: 1px solid black; padding: 8px;">
                        {{ ucfirst($column) }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    @foreach($columns as $column)
                        <td class="border border-gray-300 px-4 py-2">{{ $row->$column }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
<div class="pt-16">
    
<div class="flex flex-col" >
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
    
    {{-- <h2 class="text-xl font-bold mb-4">Users with Role: {{ ucfirst($role) }}</h2> --}}
    <!-- <table
    class="min-w-full text-left text-sm font-light text-surface dark:text-white" >
    <thead
    class="border-b border-neutral-200 font-medium dark:border-white/10">
            <tr>
                @foreach($columns as $column)
                    <th scope="col" class="px-6 py-4">
                        {{ ucfirst($column) }}
                    </th>
                @endforeach
                <th scope="col" class="px-6 py-4"> change
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr class="border-b border-neutral-200 transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600" data-id="{{ $row->id }}">
                    @foreach($columns as $column)
                        <td class="whitespace-nowrap px-6 py-4 ">{{ $row->$column }}</td>
                    @endforeach
                    <td class="whitespace-nowrap px-6 py-4 ">      <div class="flex justify-end gap-4">
                        <a x-data="{ tooltip: 'Delete' }" href="#">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                            x-tooltip="tooltip"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                            />
                          </svg>
                        </a>
                         <a x-data="{ tooltip: 'Edite' }" href="#" class="edit-icon" id="open-popup" 
                                    data-id="{{ $row->id }}" 
                                    data-name="{{ $row->name }}" 
                                    data-email="{{ $row->email }}">

                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                            x-tooltip="tooltip"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                            />
                          </svg>
                        </a>
                      </div></td>
                </tr>
            @endforeach

        </tbody>
    </table> -->


    <table class="min-w-full text-left text-sm font-light text-surface dark:text-white">
    <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
        <tr>
            @foreach($columns as $column)
                <th scope="col" class="px-6 py-4">{{ ucfirst($column) }}</th>
            @endforeach
            <th scope="col" class="px-6 py-4">Change</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr class="border-b border-neutral-200 transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600" data-id="{{ $row->id }}">
                @foreach($columns as $column)
                    <td class="whitespace-nowrap px-6 py-4">{{ $row->$column }}</td>
                @endforeach
                <td class="whitespace-nowrap px-6 py-4">
                    <div class="flex justify-end gap-4">
                        

                        <!--  <a x-data="{ tooltip: 'Delete' }" href="{{ route('users.destroy', $row->id) }}" onclick="return confirm('Are you sure you want to delete?')"> -->

                            <!-- Delete Icon -->
                            <!-- <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                            x-tooltip="tooltip"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                            />
                          </svg> -->

                        <!-- </a> --> 
                        <a class="delete-icon" href="#" data-id="{{ $row->id }}" >
    <!-- Delete Icon SVG -->
    <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
        />
    </svg>
</a>


<!-- Confirmation Modal -->
<div id="custom-modal">
    <div class="modal">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-12 w-12 text-red-600 mx-auto mb-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9" />
        </svg>
        <p>Are you sure you want to delete this item?</p>
        <button id="modal-yes">Yes</button>
        <button id="modal-no">No</button>
    </div>
</div>



                        <a x-data="{ tooltip: 'Edit' }" href="#" class="edit-icon" id="open-popup" 
                           data-id="{{ $row->id }}" 
                           data-name="{{ $row->name }}" 
                           data-email="{{ $row->email }}">
                            <!-- Edit Icon -->
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                            x-tooltip="tooltip"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                            />
                          </svg>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
</div>
</div>
</div>

</div>


<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<script src="{{ asset('js/dashboard.js') }}"></script>

