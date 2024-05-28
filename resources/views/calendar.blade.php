<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Submit Event Proposal') }}
    </h2>
  </x-slot>

  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
      <div class="container mt-4 bg-white p-4 shadow-sm sm:rounded-lg flex justify-between border-gray-100 border-2">
        <button id="prev-month"
          class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.2 px-4 rounded-lg shadow-sm">Previous</button>
        <button id="next-month"
          class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.2 px-4 rounded-lg shadow-sm">Next</button>

        <button type="button" id="open-modal"
          class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.2 px-4 rounded-lg shadow-sm">
          Large
        </button>

        <div id="medium-modal"
          class="modal hidden fixed inset-0 z-50 overflow-auto bg-gray-800 bg-opacity-50 flex justify-center items-center">
          <div class="modal-content bg-white w-full lg:max-w-2xl m-3 lg:mx-auto p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center pb-3">
              <h3 class="text-xl font-bold text-gray-800">Modal Title</h3>
              <button id="close-modal" class="text-gray-800 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            <form id="event-form" method="post" action="{{ route('calendar.post-calendar-event') }}">
              @csrf
              <input type="hidden" id="modal-date" name="date">
              <input type="hidden" id="modal-event-id" name="id">

              <label for="event" class="block mb-2 text-sm font-medium text-gray-900">Event</label>
              <input type="text" id="modal-event" name="event" placeholder="Enter event"
                class="block w-full p-2.5 mb-4 border border-gray-300 rounded-lg shadow-sm">

              <label for="time" class="block mb-2 text-sm font-medium text-gray-900">Time</label>
              <input type="text" id="modal-time" name="time" placeholder="Enter Time"
                class="block w-full p-2.5 mb-4 border border-gray-300 rounded-lg shadow-sm">

              <x-input-error :messages="$errors->get('event')" class="mt-2" />
              <x-input-error :messages="$errors->get('time')" class="mt-2" />
              <button type="submit"
                class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 rounded-lg shadow-sm">Submit</button>
            </form>
            <div class="flex justify-end pt-4">
              <button id="close-modal"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none">Close</button>
            </div>
          </div>
        </div>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const prevButton = document.getElementById('prev-month');
          const nextButton = document.getElementById('next-month');
          const openModalButton = document.getElementById('open-modal');
          const closeModalButtons = document.querySelectorAll('#close-modal');
          const modal = document.getElementById('medium-modal');
          const modalDateInput = document.getElementById('modal-date');
          const modalEventInput = document.getElementById('modal-event');
          const modalTimeInput = document.getElementById('modal-time');
          const modalEventIdInput = document.getElementById('modal-event-id');
          const eventForm = document.getElementById('event-form');

          prevButton.addEventListener('click', function() {
            const currentDate = new Date('{{ $date->format('Y-m-d') }}');
            const prevMonthDate = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 1);
            window.location.href =
              `{{ route('calendar.get-calendar') }}?year=${prevMonthDate.getFullYear()}&month=${prevMonthDate.getMonth() + 1}`;
          });

          nextButton.addEventListener('click', function() {
            const currentDate = new Date('{{ $date->format('Y-m-d') }}');
            const nextMonthDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
            window.location.href =
              `{{ route('calendar.get-calendar') }}?year=${nextMonthDate.getFullYear()}&month=${nextMonthDate.getMonth() + 1}`;
          });

          openModalButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
            modalEventIdInput.value = '';
            modalEventInput.value = '';
            modalTimeInput.value = '';
          });

          closeModalButtons.forEach(button => {
            button.addEventListener('click', function() {
              modal.classList.add('hidden');
            });
          });

          const days = document.querySelectorAll('.day');
          days.forEach(day => {
            day.addEventListener('click', function() {
              const selectedDate = this.querySelector('.content').textContent;
              const currentMonth = '{{ $date->format('m') }}';
              const currentYear = '{{ $date->format('Y') }}';
              modalDateInput.value = `${currentYear}-${currentMonth}-${selectedDate.padStart(2, '0')}`;
              modal.classList.remove('hidden');
              modalEventIdInput.value = '';
              modalEventInput.value = '';
              modalTimeInput.value = '';
            });
          });

          const editButtons = document.querySelectorAll('.edit-event');
          editButtons.forEach(button => {
            button.addEventListener('click', function(event) {
              event.stopPropagation();
              const eventId = this.dataset.id;
              const eventDate = this.dataset.date;
              const eventName = this.dataset.event;
              const eventTime = this.dataset.time;

              modalDateInput.value = eventDate;
              modalEventIdInput.value = eventId;
              modalEventInput.value = eventName;
              modalTimeInput.value = eventTime;

              modal.classList.remove('hidden');
            });
          });

          const deleteButtons = document.querySelectorAll('.delete-event');
          deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
              event.stopPropagation();
              if (confirm('Are you sure you want to delete this event?')) {
                const eventId = this.dataset.id;
                fetch(`{{ route('calendar.delete-calendar-event') }}`, {
                  method: 'DELETE',
                  headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                  },
                  body: JSON.stringify({
                    id: eventId
                  })
                }).then(response => {
                  if (response.ok) {
                    location.reload();
                  } else {
                    alert('Failed to delete event.');
                  }
                });
              }
            });
          });
        });
      </script>

      <div class="container mt-4 flex flex-col md:flex-row gap-6">
        <div class="form-section bg-white p-6 shadow-sm sm:rounded-lg md:w-1/5  border-gray-100 border-2">
          <form method="post" action="{{ route('calendar.post-calendar-event') }}">
            @csrf

            <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Date</label>
            <input type="date" id="date" name="date"
              class="block w-full p-2.5 mb-4 border border-gray-300 rounded-lg shadow-sm">
            <x-input-error :messages="$errors->get('date')" class="mt-2" />
            <label for="event" class="block mb-2 text-sm font-medium text-gray-900">Event</label>

            <input type="text" id="event" name="event" placeholder="Enter event"
              class="block w-full p-2.5 mb-4 border border-gray-300 rounded-lg shadow-sm">

            <input type="text" id="time" name="time" placeholder="Enter time"
              class="block w-full p-2.5 mb-4 border border-gray-300 rounded-lg shadow-sm">

            <x-input-error :messages="$errors->get('event')" class="mt-2" />
            <x-input-error :messages="$errors->get('time')" class="mt-2" />
            <button type="submit"
              class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 rounded-lg shadow-sm">Submit</button>
          </form>
        </div>

        <div class="calendar bg-white p-6 shadow-sm sm:rounded-lg md:w-4/5  border-gray-100 border-2">
          <div class="month-year text-center text-xl font-semibold mb-4">
            <span class="month">{{ $date->format('M') }}</span>
            <span class="year">{{ $date->format('Y') }}</span>
          </div>
          <div class="days grid grid-cols-7 gap-2">
            @php
              $dayLabels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            @endphp
            @foreach ($dayLabels as $dayLabel)
              <span class="day-label text-center font-semibold bg-gray-200 rounded-md py-2">{{ $dayLabel }}</span>
            @endforeach
            @while ($startOfCalendar <= $endOfCalendar)
              @php
                $extraClass = $startOfCalendar->format('m') != $date->format('m') ? 'text-gray-400' : 'text-black';
                $extraClass .= $startOfCalendar->isToday() ? ' bg-green-300' : '';
              @endphp
              <div class="day {{ $extraClass }} bg-gray-100 rounded-md p-2 h-24 flex flex-col justify-between">
                <span class="content">{{ $startOfCalendar->format('j') }}</span>
                @foreach ($calendarEvent as $calendarEventData)
                  @php
                    $dateFormat = \Carbon\Carbon::parse($calendarEventData->date);
                    $eventColors = [
                        /* 'bg-red-300', */
                        'bg-blue-300' /* , 'bg-green-300', 'bg-yellow-300', 'bg-purple-300',  */,
                    ];
                    $colorClass = $eventColors[$loop->index % count($eventColors)];
                  @endphp
                  @if ($startOfCalendar->format('Y-m-d') == $dateFormat->format('Y-m-d'))
                    <div class="event {{ $colorClass }} rounded-md p-1 text-xs mt-1">
                      <div>{{ $calendarEventData->event }}</div>
                      <div>{{ $calendarEventData->time }}</div>
                      <div class="flex justify-between mt-1">
                        <button class="edit-event text-blue-600 hover:text-blue-800"
                          data-id="{{ $calendarEventData->id }}" data-date="{{ $calendarEventData->date }}"
                          data-event="{{ $calendarEventData->event }}"
                          data-time="{{ $calendarEventData->time }}">Edit</button>
                        <button class="delete-event text-red-600 hover:text-red-800"
                          data-id="{{ $calendarEventData->id }}">Delete</button>
                      </div>
                    </div>
                  @endif
                @endforeach
              </div>
              @php
                $startOfCalendar->addDay();
              @endphp
            @endwhile
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
