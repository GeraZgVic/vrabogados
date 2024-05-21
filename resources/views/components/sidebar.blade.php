 <!-- Sidebar -->
 <aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-primary-darker dark:bg-darker md:block">
     <div class="flex flex-col h-full">
         <!-- Sidebar links -->
         <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">

             <a href="{{route('dashboard')}}"
                 class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
                 <span aria-hidden="true">
                     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                     </svg>
                 </span>
                 <span class="ml-2 text-sm">Dashboard</span>
             </a>
             <div x-data="{ isActive: false, open: false }">
                 <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                 <a href="#" @click="$event.preventDefault(); open = !open"
                     class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                     :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
                     :aria-expanded="(open || isActive) ? 'true' : 'false'">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>                    
                     <span class="ml-2 text-sm">Blog</span>
                     <span class="ml-auto" aria-hidden="true">
                         <!-- active class 'rotate-180' -->
                         <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </span>
                 </a>
                 <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                     <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                     <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                     <a href="#" role="menuitem"
                         class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                         Ver Posts
                     </a>
                     <a href="#" role="menuitem"
                         class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                         Crear Post
                     </a>
                 </div>
             </div>
         </nav>

         <!-- Sidebar footer -->
         <div class="flex-shrink-0 px-2 py-4 space-y-2">
             <button @click="openSettingsPanel" type="button"
                 class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark">
                 <span aria-hidden="true">
                     <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                     </svg>
                 </span>
                 <span>Customize</span>
             </button>
         </div>
     </div>
 </aside>
