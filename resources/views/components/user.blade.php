<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
<!-- Sidebar -->
<div id="sidebar"
    class="layout-content-container flex flex-col w-4/5 md:w-80 fixed inset-y-0 left-0 bg-slate-50 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50 md:static md:flex"
    aria-hidden="true">
    <div class="flex h-full min-h-[700px] flex-col justify-between bg-slate-50 p-4">
        <div class="flex flex-col gap-4">
            <h1 class="text-[#0e141b] text-base font-medium leading-normal hidden md:block">Hacwallet</h1>
            <nav class="flex flex-col gap-2" aria-label="Main navigation">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#e7edf3]"
                    aria-current="page">
                    <div class="text-[#0e141b]" data-icon="House" data-size="24px" data-weight="fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Dashboard</p>
                </a>
                <a href="{{ route('user.sendmail') }}"
                    class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                    <div class="text-[#0e141b]" data-icon="Envelope" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Send Mail</p>
                </a>
                <a href="{{ route('user.subscribe') }}"
                    class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                    <div class="text-[#0e141b]" data-icon="Users" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                            viewBox="0 0 256 256">
                            <path
                                d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,1,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Subscribe</p>
                </a>
                <a href="{{ route('user.raids') }}"
                    class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                    <div class="text-[#0e141b]" data-icon="Megaphone" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                            viewBox="0 0 256 256">
                            <path
                                d="M240,120a48.05,48.05,0,0,0-48-48H152.2c-2.91-.17-53.62-3.74-101.91-44.24A16,16,0,0,0,24,40V200a16,16,0,0,0,26.29,12.25c37.77-31.68,77-40.76,93.71-43.3v31.72A16,16,0,0,0,151.12,214l11,7.33A16,16,0,0,0,186.5,212l11.77-44.36A48.07,48.07,0,0,0,240,120ZM40,199.93V40h0c42.81,35.91,86.63,45,104,47.24v65.48C126.65,155,82.84,164.07,40,199.93Zm131,8,0,.11-11-7.33V168h21.6ZM192,152H160V88h32a32,32,0,1,1,0,64Z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Raids</p>
                </a>
                <a href="{{ route('profile.edit') }}"
                    class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                    <div class="text-[#0e141b]" data-icon="User" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                            viewBox="0 0 256 256">
                            <path
                                d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Profile</p>
                </a>
                <form action="{{ route('logout') }}" method="POST" class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                    @csrf
                    <button type="submit" class="flex items-center gap-3 w-full text-left">
                        <div class="text-[#0e141b]" data-icon="SignOut" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M112,216a8,8,0,0,1-8,8H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32H104a8,8,0,0,1,0,16H48V208h56A8,8,0,0,1,112,216Zm110.39-92.94a8,8,0,0,1-2.08,5.52L188.94,160H120a8,8,0,0,1,0-16h68.94l31.37-31.38a8,8,0,0,1,7.78-2.08,8.08,8.08,0,0,1,5.66,5.66Z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-[#0e141b] text-sm font-medium leading-normal">Logout</p>
                    </button>
                </form>
            </nav>
        </div>
    </div>
</div>

