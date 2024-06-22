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
          class="bg-white hover:bg-blue-700 text-white font-medium py-2.2 px-4 rounded-lg shadow-sm">
          {{--  Large --}}
        </button>

        <div id="medium-modal"
          class="modal hidden fixed inset-0 z-50 overflow-auto bg-gray-800 bg-opacity-50 flex justify-center items-center">
          <div class="modal-content bg-white w-full lg:max-w-2xl m-3 lg:mx-auto p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center pb-3">
              <h3 class="text-xl font-bold text-gray-800">Add Event</h3>
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

              <!-- Start Time -->
              <label for="start-time" class="block mb-2 text-sm font-medium text-gray-900">Start Time</label>
              <input type="time" id="start-time" name="start_time"
                class="block w-full p-2.5 mb-4 border border-gray-300 rounded-lg shadow-sm" required>

              <!-- End Time -->
              <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900">End Time</label>
              <input type="time" id="end-time" name="end_time"
                class="block w-full p-2.5 mb-4 border border-gray-300 rounded-lg shadow-sm" required>

              <!-- Add Task and Person in Charge -->
              <label for="tasks" class="block mb-2 text-sm font-medium text-gray-900">Tasks</label>
              <div id="tasks-container" class="mb-4">
                <div class="task-entry mb-2 flex">
                  <input type="checkbox" name="tasks_status[]" class="task-status mr-2">
                  <input type="text" name="tasks[]" placeholder="Enter task"
                    class="block w-1/2 p-2.5 border border-gray-300 rounded-l-lg shadow-sm">
                  <input type="text" name="persons_in_charge[]" placeholder="Person in charge"
                    class="block w-1/2 p-2.5 border border-gray-300 rounded-r-lg shadow-sm">
                </div>
              </div>
              <button type="button" id="add-task"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg shadow-sm mb-4">Add
                Task</button>

              <x-input-error :messages="$errors->get('event')" class="mt-2" />
              <x-input-error :messages="$errors->get('start_time')" class="mt-2" />
              <x-input-error :messages="$errors->get('end_time')" class="mt-2" />
              <button type="submit"
                class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 rounded-lg shadow-sm">Submit</button>
            </form>



            <div class="flex justify-end pt-4">
              <button id="close-modal"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none">Close</button>
            </div>
          </div>
        </div>

        <!-- Display Modal for Tasks -->
        <div id="task-modal"
          class="modal hidden fixed inset-0 z-50 overflow-auto bg-gray-800 bg-opacity-50 flex justify-center items-center">
          <div class="modal-content bg-white w-full lg:max-w-2xl m-3 lg:mx-auto p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center pb-3">
              <h3 class="text-xl font-bold text-gray-800">Task List</h3>
              <button id="close-task-modal" class="text-gray-800 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            <div id="task-list" class="mt-4">
              <!-- Task list will be populated here -->
            </div>
            <div class="flex justify-end pt-4">
              <button id="save-task-status"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Save</button>
              <button id="close-task-modal"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none">Close</button>
            </div>
          </div>
        </div>


      </div>


      <script>
        document.addEventListener('DOMContentLoaded', function() {

          //

          const saveTaskStatusButton = document.getElementById('save-task-status');

          saveTaskStatusButton.addEventListener('click', function() {
            const tasksStatus = Array.from(document.querySelectorAll('.task-status')).map(checkbox => checkbox
              .checked);
            const eventId = document.querySelector('.gres-event').dataset.id;

            fetch('{{ route('calendar.save-task-status') }}', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
              },
              body: JSON.stringify({
                id: eventId,
                tasks_status: tasksStatus
              })
            }).then(response => {
              if (response.ok) {
                alert('Task status saved successfully.');
              } else {
                alert('Failed to save task status.');
              }
            });
          });




          // Add Task Button
          const addTaskButton = document.getElementById('add-task');
          const tasksContainer = document.getElementById('tasks-container');

          addTaskButton.addEventListener('click', function() {
            const taskEntry = document.createElement('div');
            taskEntry.classList.add('task-entry', 'mb-2', 'flex');
            taskEntry.innerHTML = `
             <input type="checkbox" name="tasks_status[]" class="task-status mr-2">
                    <input type="text" name="tasks[]" placeholder="Enter task" class="block w-1/2 p-2.5 border border-gray-300 rounded-l-lg shadow-sm">
                    <input type="text" name="persons_in_charge[]" placeholder="Person in charge" class="block w-1/2 p-2.5 border border-gray-300 rounded-r-lg shadow-sm">
                `;
            tasksContainer.appendChild(taskEntry);
          });

          // Close Modal Button
          const closeTaskModalButtons = document.querySelectorAll('#close-task-modal');
          const taskModal = document.getElementById('task-modal');

          closeTaskModalButtons.forEach(button => {
            button.addEventListener('click', function() {
              taskModal.classList.add('hidden');
            });
          });

          // Gres Button to Open Task Modal
          const gresButtons = document.querySelectorAll('.gres-event');
          gresButtons.forEach(button => {
            button.addEventListener('click', function(event) {
              event.stopPropagation();
              const eventId = this.dataset.id;
              const eventTasks = JSON.parse(this.dataset.tasks);
              const eventPersonsInCharge = JSON.parse(this.dataset.persons_in_charge);

              const taskList = document.getElementById('task-list');
              taskList.innerHTML = ''; // Clear previous tasks
              eventTasks.forEach((task, index) => {
                const taskItem = document.createElement('div');
                taskItem.classList.add('task-item', 'mb-2', 'flex', 'items-center');
                taskItem.innerHTML = `
                            <input type="checkbox" class="mr-2">
                            <span class="task-name">${task}</span> - <span class="person-in-charge ml-2">${eventPersonsInCharge[index]}</span>
                        `;
                taskList.appendChild(taskItem);
              });

              taskModal.classList.remove('hidden');
            });
          });
        });
      </script>


      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const prevButton = document.getElementById('prev-month');
          const nextButton = document.getElementById('next-month');
          const openModalButton = document.getElementById('open-modal');
          const closeModalButtons = document.querySelectorAll('#close-modal');
          const modal = document.getElementById('medium-modal');
          const modalDateInput = document.getElementById('modal-date');
          const modalEventInput = document.getElementById('modal-event');
          const startTimeInput = document.getElementById('start-time');
          const endTimeInput = document.getElementById('end-time');
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
            startTimeInput.value = '';
            endTimeInput.value = '';
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
              startTimeInput.value = '';
              endTimeInput.value = '';
            });
          });

          const editButtons = document.querySelectorAll('.edit-event');
          editButtons.forEach(button => {
            button.addEventListener('click', function(event) {
              event.stopPropagation();
              const eventId = this.dataset.id;
              const eventDate = this.dataset.date;
              const eventName = this.dataset.event;
              const startTime = this.dataset.start_time;
              const endTime = this.dataset.end_time;

              modalDateInput.value = eventDate;
              modalEventIdInput.value = eventId;
              modalEventInput.value = eventName;
              startTimeInput.value = startTime;
              endTimeInput.value = endTime;

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
        <div class="form-section bg-white p-6 shadow-sm sm:rounded-lg md:w-1/5 border-gray-100 border-2">
          @if ($user->role == 'admin')
            <h2 class="text-2xl font-semibold "></h2>
          @else
            <h2 class="text-2xl font-semibold ">Secretariat Events</h2>
          @endif
          <!-- <h2 class="text-2xl font-semibold ">Secretariat Events</h2> -->
          @foreach ($secretariatEvents as $secretariatEvent)
            <div class="bg-white p-3 mb-2 border rounded-lg shadow-sm cursor-pointer secretariat-event"
              data-event-name="{{ $secretariatEvent->eventProposal->eventName }}"
              data-event-date="{{ $secretariatEvent->eventProposal->date }}"
              data-event-time="{{ $secretariatEvent->eventProposal->time }}"
              data-task="{{ $secretariatEvent->secre_task }}">
              <h2 class="text-xl font-semibold">{{ $secretariatEvent->eventProposal->eventName }}</h2>
              <p class="text-sm">{{ $secretariatEvent->eventProposal->date }}
                {{ $secretariatEvent->eventProposal->time }}</p>
            </div>
          @endforeach
        </div>

        <!-- Modal Template -->
        <div id="taskModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
          <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <h2 id="modalEventName" class="text-xl font-semibold mb-4"></h2>
            <p id="modalEventDate" class="text-sm mb-2"></p>
            <p id="modalEventTime" class="text-sm mb-4"></p>
            <p id="modalTask" class="text-base"></p>
            <button id="closeModal" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Close</button>
          </div>
        </div>

        <script>
          document.querySelectorAll('.secretariat-event').forEach(eventBox => {
            eventBox.addEventListener('click', function() {
              document.getElementById('modalEventName').textContent = this.dataset.eventName;
              document.getElementById('modalEventDate').textContent = this.dataset.eventDate;
              document.getElementById('modalEventTime').textContent = this.dataset.eventTime;
              document.getElementById('modalTask').textContent = 'Task: ' + this.dataset.task;
              document.getElementById('taskModal').classList.remove('hidden');
            });
          });

          document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('taskModal').classList.add('hidden');
          });
        </script>
        <!-- End Modal Template -->

        <div class="calendar-section md:w-4/5">
          <div class="calendar bg-white p-6 shadow-sm sm:rounded-lg border-gray-100 border-2">
            <div class="month-year text-center text-xl font-semibold mb-4">
              <span class="month">{{ $date->format('M') }}</span>
              <span class="year">{{ $date->format('Y') }}</span>
            </div>
            <div class="days grid grid-cols-7 gap-2">
              @php
                $dayLabels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
              @endphp
              @foreach ($dayLabels as $dayLabel)
                <span
                  class="day-label text-center font-semibold bg-gray-200 rounded-md py-2">{{ $dayLabel }}</span>
              @endforeach
              @while ($startOfCalendar <= $endOfCalendar)
                @php
                  $extraClass = $startOfCalendar->format('m') != $date->format('m') ? 'text-gray-400' : 'text-black';
                  $extraClass .= $startOfCalendar->isToday() ? ' bg-green-300' : '';
                @endphp
                <div class="day {{ $extraClass }} bg-gray-100 rounded-md p-2 h-24 flex flex-col justify-between">
                  <span class="content">{{ $startOfCalendar->format('j') }}</span>
                  <!-- Update existing event loop to include Gres button -->
                  @foreach ($calendarEvents as $calendarEventData)
                    @php
                      $dateFormat = \Carbon\Carbon::parse($calendarEventData->date);
                      $eventColors = ['bg-blue-300'];
                      $colorClass = $eventColors[$loop->index % count($eventColors)];
                    @endphp
                    @if ($startOfCalendar->format('Y-m-d') == $dateFormat->format('Y-m-d'))
                      <div class="event {{ $colorClass }} rounded-md p-1 text-xs mt-1">
                        <span
                          class="time-block">{{ \Carbon\Carbon::parse($calendarEventData->start_time)->format('h:i A') }}
                          - {{ \Carbon\Carbon::parse($calendarEventData->end_time)->format('h:i A') }}</span>
                        <div class="event-name truncate">{{ $calendarEventData->event }}</div>
                        <div class="flex justify-between mt-1">
                          <button class="edit-event text-blue-600 hover:text-blue-800"
                            data-event="{{ $calendarEventData->event }}" data-id="{{ $calendarEventData->id }}"
                            data-date="{{ $calendarEventData->date }}"
                            data-start_time="{{ $calendarEventData->start_time }}"
                            data-end_time="{{ $calendarEventData->end_time }}">Edit</button>
                          <button class="gres-event text-green-600 hover:text-green-800"
                            data-id="{{ $calendarEventData->id }}"
                            data-tasks="{{ json_encode($calendarEventData->tasks) }}"
                            data-persons_in_charge="{{ json_encode($calendarEventData->persons_in_charge) }}">Progress</button>
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
  </div>
</x-app-layout>
