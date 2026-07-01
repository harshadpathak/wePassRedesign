<header
    class="h-16 flex items-center justify-between px-margin-desktop sticky top-0 bg-surface/80 backdrop-blur-md border-b border-outline-variant z-40">
    <div class="flex items-center gap-2 flex-1 max-w-xl">
    <button id="mobile-menu-btn" type="button"
        class="lg:hidden shrink-0 p-2 rounded-lg hover:bg-surface-container-high text-on-surface-variant transition-all">
        <span class="material-symbols-outlined">menu</span>
    </button>
    </div>
    <div class="flex items-center gap-4 translate-x-[10px] translate-x-2" style="transform: translateX(5px);">
    <div class="relative group">
        <button type="button"
            class="material-symbols-outlined text-on-surface-variant group-hover:bg-surface-container group-hover:text-primary rounded-lg p-2 transition-all">help</button>
        <!-- Support Popover -->
        <div
            class="absolute right-0 mt-3 w-80 origin-top-right rounded-2xl border border-outline-variant/60 bg-white shadow-2xl shadow-black/10 opacity-0 invisible translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50 overflow-hidden">
            <!-- Header -->
            <div class="relative px-6 pt-7 pb-5 text-center bg-white">
                <div class="mx-auto w-16 h-16 rounded-full bg-primary/10 ring-8 ring-primary/[0.04] flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[30px]">support_agent</span>
                </div>
                <h4 class="mt-4 text-headline-md font-bold text-on-surface tracking-tight">Need Assistance?</h4>
                <p class="mt-1.5 text-label-md text-gray-400 leading-relaxed">Have a question or ran into an issue?<br>Our support team is here to help.</p>
            </div>
            <!-- Email card -->
            <div class="px-5 pb-3">
                <a href="mailto:support@wepass.io"
                    class="group/mail flex items-center gap-3 rounded-xl border border-outline-variant bg-surface-container-low/50 px-4 py-3 hover:border-primary/40 hover:bg-primary/5 transition-all">
                    <span class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0 group-hover/mail:bg-primary group-hover/mail:text-white transition-colors">
                        <span class="material-symbols-outlined text-[20px]">mail</span>
                    </span>
                    <span class="min-w-0 leading-tight">
                        <span class="block text-body-md font-bold text-on-surface truncate">support@wepass.io</span>
                        <span class="block text-label-sm text-outline">Click to send us an email</span>
                    </span>
                    <span class="material-symbols-outlined text-outline text-[18px] ml-auto shrink-0 group-hover/mail:text-primary group-hover/mail:translate-x-0.5 transition-all">arrow_forward</span>
                </a>
            </div>
            <!-- Reply time -->
            <div class="px-5 pb-5 pt-1 flex justify-center">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 border border-emerald-200/70 px-3 py-1.5 text-label-sm font-semibold text-emerald-700">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    Typical reply: within 24hrs
                </span>
            </div>
        </div>
    </div>
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