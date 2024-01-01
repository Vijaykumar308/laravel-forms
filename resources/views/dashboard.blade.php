<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            {{-- <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button> --}}
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{-- {{ __("You're logged in!")  }} --}}
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto">
            <main>
                <div class="pt-6 px-4">
                    <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex justify-center items-center">
                                <div class="flex-shrink-0">
                                    <h4 class="text-base font-normal text-gray-500">
                                        <a href="{{route('education')}}">Education Details</a>
                                    </h4>
                                    <span class="font-thin leading-none font-bold text-gray-600">Fill your education details</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex justify-center items-center">
                                <div class="flex-shrink-0">
                                    <h4 class="text-base font-normal text-gray-500">
                                        <a href="{{route('documents')}}">Documents Uploads</a>
                                    </h4>
                                    <span class="font-thin leading-none font-bold text-gray-600">Uploads documents</span>
                                </div>
                            </div>
                        </div>

                     <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                        <div class="flex justify-center items-center">
                            <div class="flex-shrink-0">
                                <h4 class="text-base font-normal text-gray-500">
                                    <a href="{{route('job_alerts')}}">Jobs Alerts</a>
                                </h4>
                                <span class="font-thin leading-none font-bold text-gray-600">Check for the leatest jobs</span>
                            </div>
                        </div>
                     </div>
                    </div>

                  {{-- <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4"> --}}
                  <div class="mt-4">
                     <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                        <div class="flex items-center justify-between mb-4">
                           <h3 class="text-xl font-bold leading-none text-gray-900">Latest Jobs Alrets</h3>
                           <a href="{{route('job_alerts')}}" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                           View all
                           </a>
                        </div>
                        <div class="flow-root">
                           <ul role="list" class="divide-y divide-gray-200">
                              <li class="py-3 sm:py-4">
                                 <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                       <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/neil-sims.png" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                       <p class="text-sm font-medium text-gray-900 truncate">
                                          PSEB Teachers
                                       </p>
                                       <p class="text-sm text-gray-500 truncate">
                                          <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="17727a767e7b57607e7973646372653974787a">[email&#160;protected]</a>
                                       </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                       Rs 1149
                                    </div>
                                 </div>
                              </li>
                              <li class="py-3 sm:py-4">
                                 <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                       <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/bonnie-green.png" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                       <p class="text-sm font-medium text-gray-900 truncate">
                                          Punjab Polics Sub Ispector
                                       </p>
                                       <p class="text-sm text-gray-500 truncate">
                                          <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b1b9b5bdb894a3bdbab0a7a0b1a6fab7bbb9">[email&#160;protected]</a>
                                       </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                       Rs 670
                                    </div>
                                 </div>
                              </li>
                              <li class="py-3 sm:py-4">
                                 <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                       <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/michael-gough.png" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                       <p class="text-sm font-medium text-gray-900 truncate">
                                          Sports Department
                                       </p>
                                       <p class="text-sm text-gray-500 truncate">
                                          <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="57323a363e3b17203e3933242332257934383a">[email&#160;protected]</a>
                                       </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                       Rs 1150
                                    </div>
                                 </div>
                              </li>
                              <li class="py-3 sm:py-4">
                                 <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                       <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/thomas-lean.png" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                       <p class="text-sm font-medium text-gray-900 truncate">
                                          Hello world
                                       </p>
                                       <p class="text-sm text-gray-500 truncate">
                                          <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="284d45494144685f41464c5b5c4d5a064b4745">[email&#160;protected]</a>
                                       </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                        Rs 2399
                                    </div>
                                 </div>
                              </li>
                              <li class="pt-3 sm:pt-4 pb-0">
                                 <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                       <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/lana-byrd.png" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                       <p class="text-sm font-medium text-gray-900 truncate">
                                          lorem form
                                       </p>
                                       <p class="text-sm text-gray-500 truncate">
                                          <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2c7cfc3cbcee2d5cbccc6d1d6c7d08cc1cdcf">[email&#160;protected]</a>
                                       </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                       Rs 367
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>

                     {{-- <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                        <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Acquisition Overview</h3>
                        <div class="block w-full overflow-x-auto">
                           <table class="items-center w-full bg-transparent border-collapse">
                              <thead>
                                 <tr>
                                    <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Top Channels</th>
                                    <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Users</th>
                                    <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px"></th>
                                 </tr>
                              </thead>
                              <tbody class="divide-y divide-gray-100">
                                 <tr class="text-gray-500">
                                    <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Organic Search</th>
                                    <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">5,649</td>
                                    <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                       <div class="flex items-center">
                                          <span class="mr-2 text-xs font-medium">30%</span>
                                          <div class="relative w-full">
                                             <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-cyan-600 h-2 rounded-sm" style="width: 30%"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="text-gray-500">
                                    <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Referral</th>
                                    <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">4,025</td>
                                    <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                       <div class="flex items-center">
                                          <span class="mr-2 text-xs font-medium">24%</span>
                                          <div class="relative w-full">
                                             <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-orange-300 h-2 rounded-sm" style="width: 24%"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="text-gray-500">
                                    <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Direct</th>
                                    <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">3,105</td>
                                    <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                       <div class="flex items-center">
                                          <span class="mr-2 text-xs font-medium">18%</span>
                                          <div class="relative w-full">
                                             <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-teal-400 h-2 rounded-sm" style="width: 18%"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="text-gray-500">
                                    <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Social</th>
                                    <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">1251</td>
                                    <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                       <div class="flex items-center">
                                          <span class="mr-2 text-xs font-medium">12%</span>
                                          <div class="relative w-full">
                                             <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-pink-600 h-2 rounded-sm" style="width: 12%"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="text-gray-500">
                                    <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Other</th>
                                    <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">734</td>
                                    <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                       <div class="flex items-center">
                                          <span class="mr-2 text-xs font-medium">9%</span>
                                          <div class="relative w-full">
                                             <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-indigo-600 h-2 rounded-sm" style="width: 9%"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="text-gray-500">
                                    <th class="border-t-0 align-middle text-sm font-normal whitespace-nowrap p-4 pb-0 text-left">Email</th>
                                    <td class="border-t-0 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4 pb-0">456</td>
                                    <td class="border-t-0 align-middle text-xs whitespace-nowrap p-4 pb-0">
                                       <div class="flex items-center">
                                          <span class="mr-2 text-xs font-medium">7%</span>
                                          <div class="relative w-full">
                                             <div class="w-full bg-gray-200 rounded-sm h-2">
                                                <div class="bg-purple-500 h-2 rounded-sm" style="width: 7%"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div> --}}
                  </div>
               </div>
            </main>        
        </div>
</x-app-layout>
