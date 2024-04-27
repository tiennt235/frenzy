<div class="min-w-fit px-2.5 border border-zinc-300 flex-col justify-start items-start flex">
    <div class="p-2.5 flex-col justify-start items-start gap-2.5 flex">
        <div class="text-center text-gray-500 text-base font-bold font-['Public Sans'] uppercase leading-normal">
            Management</div>
        <div class="flex-col justify-start items-start gap-2.5 flex">
            <div class="p-2.5 self-stretch justify-between items-center gap-2.5 flex">
                <div class="flex justify-start items-center gap-2.5">
                    <div
                        class="text-center text-gray-500 text-base font-black font-['Font Awesome 6 Free'] leading-normal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                        </svg>
                    </div>
                    <div class="text-gray-400 text-base font-bold font-['Public Sans'] leading-normal">User</div>
                </div>
                <div class="text-center text-gray-500 text-base font-black font-['Font Awesome 6 Free'] leading-normal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="#637381"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </div>
            </div>
            <div class="flex-col justify-start items-start gap-2.5 flex">
                <div class="p-2.5 justify-start items-center gap-2.5 flex">
                    <div class="self-stretch justify-between items-center gap-2.5 flex">
                        <div
                            class="text-center text-gray-500 text-base font-black font-['Font Awesome 6 Free'] leading-normal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-bag"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="#637381"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                                <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                            </svg>
                        </div>
                        <div class="text-gray-400 text-base font-bold font-['Public Sans'] leading-normal">E-Commerce
                        </div>

                    </div>
                    <div
                        class="text-center text-gray-500 text-base font-black font-['Font Awesome 6 Free'] leading-normal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="#637381"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 6l6 6l-6 6" />
                        </svg>
                    </div>
                </div>
                {{-- item list --}}
                <div class="flex-col justify-start items-start gap-2.5 flex">
                    {{-- product --}}
                    <a href="/products" class="p-2.5 justify-start items-center gap-2.5 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="{{ request()->is('products') ? "w-5 h-5 stroke-primary" : "w-3 h-3 stroke-text-normal"}} icon icon-tabler icon-tabler-point" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                          </svg>
                        <div class="text-gray-400 text-base font-bold font-['Public Sans'] leading-normal">List</div>
                    </a>
                    {{-- product list --}}
                    <a href="/products/create" class="p-2.5 justify-start items-center gap-2.5 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="{{ request()->is('products/create') ? "w-5 h-5 stroke-primary" : "w-3 h-3 stroke-text-normal"}} icon icon-tabler icon-tabler-point" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                          </svg>
                        <div class="text-gray-400 text-base font-bold font-['Public Sans'] leading-normal">Create</div>
                    </a>
                </div>
            </div>
            <div class="p-2.5 justify-start items-center gap-2.5 flex">
                <div
                    class="text-center text-gray-500 text-base font-black font-['Font Awesome 6 Free'] leading-normal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-invoice"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="#637381"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <path d="M9 7l1 0" />
                        <path d="M9 13l6 0" />
                        <path d="M13 17l2 0" />
                    </svg>
                </div>
                <div class="text-gray-400 text-base font-bold font-['Public Sans'] leading-normal">Invoices</div>
            </div>
        </div>
    </div>
    <div class="p-2.5 flex-col justify-start items-start gap-2.5 flex">
        <div class="text-center text-gray-500 text-base font-bold font-['Public Sans'] uppercase leading-normal">Apps
        </div>
        <div class="p-2.5 justify-start items-center gap-2.5 flex">
            <div class="text-center text-gray-500 text-base font-black font-['Font Awesome 6 Free'] leading-normal">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message" width="20"
                    height="20" viewBox="0 0 24 24" stroke-width="2" stroke="#637381" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 9h8" />
                    <path d="M8 13h6" />
                    <path
                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                </svg>
            </div>
            <div class="text-gray-400 text-base font-bold font-['Public Sans'] leading-normal">Chat</div>
        </div>
    </div>

</div>
