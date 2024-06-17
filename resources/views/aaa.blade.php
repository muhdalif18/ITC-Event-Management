 <!-- 5 Content -->
 <div data-hs-stepper-content-item='{"index": 5}' style="display: none;">
   <div
     class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
     <div
       class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
       <div class="sm:col-span-12">
         <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
           Participants and Escorts
         </h2>
       </div>
       <div class="sm:col-span-3">
         <label for="participant_escorts" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Participants and Escorts
         </label>
       </div>
       <div class="sm:col-span-9">
         <div class="sm:col-span-9">
           <textarea id="participant_escorts" name="participant_escorts" required data-field-name="participants_escorts"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="3" placeholder="">{{ old('participant_escorts') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('participant_escorts')" />
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- End 5 Content -->

 <!-- 6 Content -->
 <div data-hs-stepper-content-item='{"index": 6}' style="display: none;">
   <div
     class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
     <div
       class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
       <div class="sm:col-span-12">
         <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
           Involvement of Industry/Association/Agencies/External Organization Bodies as Mentor/Advisor
         </h2>
       </div>
       <div class="sm:col-span-3">
         <label for="involvement" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Name and Position of Mentor/ Advisor
         </label>
       </div>
       <div class="sm:col-span-9">
         <div class="sm:flex">
           <input type="text" id="name_position" name="name_position" value="{{ old('name_position') }}" required
             data-field-name="name_position"
             class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
           <x-input-error class="mt-2" :messages="$errors->get('name_position')" />
         </div>
       </div>

       <div class="sm:col-span-3">
         <label for="company_address" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Company address
         </label>
       </div>
       <div class="sm:col-span-9">
         <div class="sm:col-span-9">
           <textarea id="company_address" name="company_address" required data-field-name="company_address"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="6">{{ old('company_address') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('company_address')" />
         </div>
       </div>

       <div class="sm:col-span-3">
         <label for="suggested_role" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Suggested Roles and Contributions of Mentors / Advisors
         </label>
       </div>
       <div class="sm:col-span-9">
         <div class="sm:flex">
           <input type="text" id="suggested_role" name="suggested_role" value="{{ old('suggested_role') }}" required
             data-field-name="suggested_role"
             class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
           <x-input-error class="mt-2" :messages="$errors->get('suggested_role')" />
         </div>
       </div>

     </div>
   </div>
 </div>
 <!-- End 6 Content -->

 <!-- 7 Content -->
 <div data-hs-stepper-content-item='{"index": 7}' style="display: none;">
   <div
     class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
     <div
       class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
       <div class="sm:col-span-12">
         <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
           Activity Success / Impact
         </h2>
       </div>
       <div class="sm:col-span-3">
         <label for="impact_student" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Towards Student
         </label>
       </div>
       <div class="sm:col-span-9">
         <div class="sm:col-span-9">
           <textarea id="impact_student_1" name="impact_student_1"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="2" placeholder="">{{ old('impact_student_1') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('impact_student_1')" />
         </div>
       </div>

       <div class="sm:col-span-3">
         <label for="impact_student_2" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
         </label>
       </div>

       <div class="sm:col-span-9">
         <div class="sm:col-span-9">
           <textarea id="impact_student_2" name="impact_student_2"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="2" placeholder="">{{ old('impact_student_2') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('impact_student_2')" />
         </div>
       </div>
       <div class="sm:col-span-3">
         <label for="objective3" class="inline-block text-sm font-medium text-gray-500 mt-2.5">

         </label>
       </div>


       <div class="sm:col-span-9">

         <div class="sm:col-span-9">
           <textarea id="impact_student_3" name="impact_student_3"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="2" placeholder="">{{ old('impact_student_3') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('impact_student_3')" />
         </div>
       </div>


       <div class="sm:col-span-3">
         <label for="toward_club" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Towards Club / University / Community
         </label>
       </div>
       <div class="sm:col-span-9">
         <div class="sm:col-span-9">
           <textarea id="toward_club_1" name="toward_club_1"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="2" placeholder="">{{ old('toward_club_1') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('toward_club_1')" />
         </div>
       </div>

       <div class="sm:col-span-3">
         <label for="toward_club_2" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
         </label>
       </div>

       <div class="sm:col-span-9">
         <div class="sm:col-span-9">
           <textarea id="toward_club_2" name="toward_club_2"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="2" placeholder="">{{ old('toward_club_2') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('toward_club_2')" />
         </div>
       </div>

       <div class="sm:col-span-3">
         <label for="toward_club_3" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
         </label>
       </div>
       <div class="sm:col-span-9">

         <div class="sm:col-span-9">
           <textarea id="toward_club_3" name="toward_club_3"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="2" placeholder="">{{ old('toward_club_3') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('toward_club_3')" />
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- End 7 Content -->

 <!-- 8 Content -->
 <div data-hs-stepper-content-item='{"index": 8}' style="display: none;">
   <div
     class="p-4 h-max bg-gray-50 items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
     <form id="tableForm">
       <table class="min-w-full">
         <thead>
           <tr class="bg-gray-100 dark:bg-gray-700">
             <th class="px-4 py-2">Column 1 Header</th>
             <th class="px-4 py-2">Column 2 Header</th>
           </tr>
         </thead>
         <tbody id="tableBody">
           <!-- Rows will be dynamically added here based on user interaction -->
         </tbody>
       </table>
       <div class="mt-4">
         <button type="button" onclick="addRow()">Add Row</button>
         <button type="button" onclick="saveData()">Save Data</button>
       </div>
     </form>
   </div>
 </div>

 <!-- End 8 Content -->

 <!-- 9 Content -->
 <div data-hs-stepper-content-item='{"index": 9}' style="display: none;">
   <div
     class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
     <div
       class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
       <div class="sm:col-span-12">
         <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
           Committee
         </h2>
       </div>
       <div class="sm:col-span-3">
         <label for="activity_commitee" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Activity Committee
         </label>
       </div>
     </div>
   </div>
 </div>
 <!-- End 9 Content -->

 <!-- 10 Content -->
 <div data-hs-stepper-content-item='{"index": 10}' style="display: none;">
   <div
     class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
     <div
       class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
       <div class="sm:col-span-12">
         <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
           Budget
         </h2>
       </div>
       <div class="sm:col-span-3">
         <label for="budget" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Budget Estimate
         </label>
       </div>
       {{-- <div class="sm:col-span-9">
          <div class="sm:col-span-9">
            <textarea id="participant_escorts" name="participant_escorts" required data-field-name="participants_escorts"
              class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
              rows="3" placeholder="">{{ old('participant_escorts') }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('participant_escorts')" />
          </div>
        </div> --}}
     </div>
   </div>
 </div>
 <!-- End 10 Content -->

 <!-- 11 Content -->
 <div data-hs-stepper-content-item='{"index": 11}' style="display: none;">
   <div
     class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
     <div
       class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
       <div class="sm:col-span-12">
         <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
           Other
         </h2>
       </div>
       <div class="sm:col-span-3">
         <label for="other" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Other
         </label>
       </div>
       <div class="sm:col-span-9">
         <div class="sm:col-span-9">
           <textarea id="other" name="other" required data-field-name="other"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="2" placeholder="">{{ old('other') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('other')" />
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- End 11 Content -->

 <!-- 12 Content -->
 <div data-hs-stepper-content-item='{"index": 12}' style="display: none;">
   <div
     class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
     <div
       class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
       <div class="sm:col-span-12">
         <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
           Implication if Not Approved
         </h2>
       </div>
       <div class="sm:col-span-3">
         <label for="implication_not_approved" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
           Implication
         </label>
       </div>
       <div class="sm:col-span-9">
         <div class="sm:col-span-9">
           <textarea id="othimplication_not_approveder" name="implication_not_approved" required
             data-field-name="implication_not_approved"
             class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
             rows="6" placeholder="">{{ old('implication_not_approved') }}</textarea>
           <x-input-error class="mt-2" :messages="$errors->get('implication_not_approved')" />
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- End 12 Content -->
