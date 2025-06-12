<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&family=Inter:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900" />
    <title>Hac-Wallet</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
        /* Prevent body scrolling when sidebar is open */
        body.sidebar-open {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden"
        style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <!-- Hamburger Menu for Mobile -->
            <div class="flex items-center justify-between px-6 py-4 md:hidden">
                <h1 class="text-[#0e141b] text-base font-medium leading-normal">Hac-Wallet</h1>
                <button id="menu-toggle" class="text-[#0e141b]" aria-label="Toggle menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                        </path>
                    </svg>
                </button>
            </div>

            <div class="flex flex-col md:flex-row gap-1 px-6 flex-1 justify-center py-5">
                @auth
                    @if (Auth::user()->role == 'user')
                        <x-user :user="Auth::user()" />
                    @elseif (Auth::user()->role == 'admin')
                        <x-admin :user="Auth::user()" />
                    @endif
                @endauth
                {{ $slot }}

            </div>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            const isOpen = sidebar.classList.contains('-translate-x-full');
            sidebar.classList.toggle('-translate-x-full');
            document.body.classList.toggle('sidebar-open');
            menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            sidebar.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 768 && !sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
                sidebar.classList.add('-translate-x-full');
                document.body.classList.remove('sidebar-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                sidebar.setAttribute('aria-hidden', 'true');
            }
        });

        // Close sidebar when clicking a navigation link on mobile
        const navLinks = document.querySelectorAll('#sidebar a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 768) {
                    sidebar.classList.add('-translate-x-full');
                    document.body.classList.remove('sidebar-open');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    sidebar.setAttribute('aria-hidden', 'true');
                }
            });
        });
    </script>
</body>

</html>
