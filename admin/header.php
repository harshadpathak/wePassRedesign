<header
    class="h-16 flex items-center justify-between px-margin-desktop sticky top-0 bg-surface/80 backdrop-blur-md border-b border-outline-variant z-40">
    <div class="flex items-center gap-2 flex-1 max-w-xl">
    <button id="mobile-menu-btn" type="button"
        class="lg:hidden shrink-0 p-2 rounded-lg hover:bg-surface-container-high text-on-surface-variant transition-all">
        <span class="material-symbols-outlined">menu</span>
    </button>
    </div>
    <div class="flex items-center gap-4 translate-x-[5px] translate-x-2">
    <button
        class="material-symbols-outlined text-on-surface-variant hover:bg-surface-container rounded-lg p-2 transition-all">help</button>
    <div class="relative">
        <button
        class="material-symbols-outlined text-on-surface-variant hover:bg-surface-container rounded-lg p-2 transition-all">notifications</button>
        <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-surface"></span>
    </div>
    <div class="relative group">
        <div
        class="flex items-center gap-3 p-2  transition-all duration-300 cursor-pointer group/profile">
        <div class="relative">
            <div
            class="w-9 h-9 rounded-md bg-brand-gradient flex items-center justify-center text-on-primary font-bold text-sm shadow-sm ring-2 ring-surface ring-offset-1 ring-offset-outline-variant/20">
            HS
            </div>
        </div>
        <div class="flex flex-col overflow-hidden">
            <p
            class="text-[14px] leading-none truncate font-bold text-on-surface group-hover/profile:text-primary transition-colors">
            Hardik Savani</p>
            <p class="text-[12px] text-outline truncate mt-0.5 font-medium">savani@wepass.io</p>
        </div>
        <span
            class="material-symbols-outlined text-outline text-[18px] ml-1 group-hover/profile:text-primary transition-transform duration-300 group-hover/profile:translate-y-0.5">expand_more</span>
        </div>
        <!-- Dropdown Menu -->
        <div
        class="absolute right-0 mt-2 w-56 border border-outline-variant/50 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 overflow-hidden bg-white">
        <div class="py-1.5">
            <a class="flex items-center gap-3 px-4 py-2.5 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
            href="userProfile.php">
            <span class="material-symbols-outlined text-secondary text-[20px]">person</span>
            <span class="font-medium">View Profile</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-2.5 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
            href="#">
            <span class="material-symbols-outlined text-secondary text-[20px]">settings</span>
            <span class="font-medium">Account Settings</span>
            </a>
            <div class="border-t border-outline-variant/30 my-1.5 mx-2"></div>
            <a class="flex items-center gap-3 px-4 py-2.5 text-body-md text-error hover:bg-error-container/40 transition-colors"
            href="#">
            <span class="material-symbols-outlined text-[20px]">logout</span>
            <span class="font-bold">Logout</span>
            </a>
        </div>
        </div>
    </div>
    </div>
</header>