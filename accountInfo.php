<!DOCTYPE html>
<html class="light" lang="en" style="">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Account Info</title>
  <?php include('head.php'); ?>
</head>
 
<body class="bg-background text-on-surface selection:bg-primary-container/20 selection:text-primary">
  <!-- Sidebar Navigation -->
   <?php include('sidebar.php'); ?>
  <!-- Main Content Shell -->
  <main class="ml-[300px] min-h-screen flex flex-col transition-all duration-300 ease-in-out">
    <!-- Top App Bar -->
     <?php include('header.php'); ?>
    <!-- Canvas -->
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex flex-wrap items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-blue-600">home</span> <span class="text-blue-600 font-semibold">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Account Info</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Account Info</h2>
        </div>
        <div class="flex items-center gap-3">
          <button
            class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-4 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm"
            onclick="document.getElementById('filter-panel').classList.toggle('hidden')">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span>
            <span class="">Filter</span>
          </button>
        </div>
      </div>

      <!-- Reports -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Google Wallet Notifications -->
          <div class="group rounded-2xl border border-outline-variant bg-white p-5 flex items-center gap-4 hover:shadow-md hover:border-primary/40 transition-all">
            <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 bg-blue-50">
                <svg viewBox="0 0 24 24" class="w-6 h-6">
                    <rect x="2.5"   y="2"   width="19" height="20"   rx="2.5" fill="#34A853"/>
                    <rect x="2.5"   y="4"   width="19" height="18"   rx="2.5" fill="#FBBC05"/>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/>
                </svg>
            </div>
            <div class="min-w-0">
              <p class="text-label-md text-outline uppercase font-semibold">Google Wallet Notifications</p>
              <p class="mt-0.5 text-[26px] leading-none font-extrabold text-on-surface tracking-tight">0</p>
            </div>
          </div>
          <!-- Apple Wallet Notifications -->
          <div class="group rounded-2xl border border-outline-variant bg-white p-5 flex items-center gap-4 hover:shadow-md hover:border-primary/40 transition-all">
            <div class="w-12 h-12 rounded-xl flex items-center justify-center text-on-surface shrink-0 bg-surface-container-high">
              <svg viewBox="0 0 24 24" class="w-6 h-6" fill="currentColor" aria-hidden="true">
                <path d="M17.05 12.04c-.03-2.43 1.99-3.6 2.08-3.66-1.13-1.66-2.9-1.89-3.53-1.91-1.5-.15-2.93.88-3.69.88-.76 0-1.94-.86-3.19-.84-1.64.02-3.15.95-3.99 2.42-1.7 2.95-.43 7.32 1.22 9.71.81 1.17 1.77 2.48 3.03 2.43 1.22-.05 1.68-.79 3.15-.79 1.47 0 1.88.79 3.17.76 1.31-.02 2.14-1.19 2.94-2.37.93-1.36 1.31-2.68 1.33-2.75-.03-.01-2.55-.98-2.58-3.86zM14.6 4.86c.67-.81 1.12-1.94.99-3.06-.96.04-2.13.64-2.82 1.45-.62.72-1.16 1.87-1.02 2.97 1.07.08 2.17-.55 2.85-1.36z"/>
              </svg>
            </div>
            <div class="min-w-0">
              <p class="text-label-md text-outline uppercase font-semibold">Apple Wallet Notifications</p>
              <p class="mt-0.5 text-[26px] leading-none font-extrabold text-on-surface tracking-tight">28</p>
            </div>
          </div>
        </div>

        <!-- Filter Panel -->
        <div class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm transition-all duration-300 overflow-hidden hidden" id="filter-panel">
          <div class="flex flex-col gap-2">
            <div class="flex flex-col gap-2">
              <h3 class="text-primary font-display font-bold text-headline-md">Filter Reports</h3>
              <p class="text-on-surface-variant text-body-md">Select a date range to filter notifications</p>
            </div>
            <div class="border-t border-outline-variant/30"></div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
              <!-- Date Range -->
              <div class="md:col-span-3 space-y-2">
                <label class="text-on-surface font-semibold text-label-md">Date Range:</label>
                <div class="relative">
                  <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary text-[20px]">calendar_month</span>
                  <input
                    class="js-daterange w-full bg-surface-container-low border-outline-variant rounded-lg pl-10 pr-4 py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-pointer"
                    placeholder="Select date range" readonly="" type="text">
                </div>
              </div>
              <!-- Actions -->
              <div class="md:col-span-3 flex items-center gap-3">
                <button
                  class="flex-1 flex items-center justify-center gap-2 bg-brand-gradient text-on-primary px-4 py-3 rounded-lg text-[14px] shadow-md shadow-primary/20 hover:opacity-95 transition-all font-bold">
                  <span class="material-symbols-outlined text-[20px]">search</span>
                  Search
                </button>
                <button
                  class="flex-1 flex items-center justify-center gap-2 bg-surface border border-outline-variant text-on-surface-variant px-4 py-3 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold">
                  <span class="material-symbols-outlined text-[20px]">cancel</span>
                  Clear
                </button>
              </div>
            </div>
          </div>
        </div>

      <!-- Account Settings -->
      <!-- <section class="bg-white rounded-2xl border border-outline-variant p-6 shadow-sm"> -->

        <!-- <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 items-stretch"> -->
          <!-- Account Info -->
          <form class="bg-white rounded-2xl border border-outline-variant/70 bg-surface-container-low/40 p-6 flex flex-col h-full">
            <div class="flex items-center gap-2.5 mb-6">
              <span class="material-symbols-outlined text-primary text-[22px]">account_circle</span>
              <h4 class="text-headline-md font-bold text-on-surface">Account Info</h4>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-5 flex-1">
              <!-- Account Name -->
              <div class="space-y-2">
                <label class="flex items-center gap-1.5 text-on-surface font-semibold text-label-md">
                  Account Name:
                  <span class="group relative inline-flex">
                    <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                    <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                      This is the account name.
                    </span>
                  </span>
                </label>
                <input type="text" value="Aatman Infotech" disabled
                  class="w-full bg-surface-container-high border-outline-variant rounded-lg py-3 px-4 text-body-md text-secondary cursor-not-allowed">
              </div>
              <!-- Account Domain -->
              <div class="space-y-2">
                <label class="flex items-center gap-1.5 text-on-surface font-semibold text-label-md">
                  Account Domain:
                  <span class="group relative inline-flex">
                    <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                    <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                      The MMS content sent as an SMS link will be stored on this domain.
                    </span>
                  </span>
                </label>
                <input type="text" value="https://aatmaninfotech.com" disabled
                  class="w-full bg-surface-container-high border-outline-variant rounded-lg py-3 px-4 text-body-md text-secondary cursor-not-allowed">
              </div>
              <!-- Timezone -->
              <div class="space-y-2">
                <label class="flex items-center gap-1.5 text-on-surface font-semibold text-label-md">
                  Timezone:
                  <span class="group relative inline-flex">
                    <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                    <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                      Choosing your time zone is important for features that rely on time, like scheduled delivery messages.
                    </span>
                  </span>
                </label>
                <select class="w-full js-select2" data-allow-clear="false">
                  <option value="Africa/Abidjan" selected>(GMT+00:00) Africa/Abidjan</option>
                  <option value="Europe/London">(GMT+00:00) Europe/London</option>
                  <option value="Europe/Berlin">(GMT+01:00) Europe/Berlin</option>
                  <option value="Asia/Kolkata">(GMT+05:30) Asia/Kolkata</option>
                  <option value="Asia/Dubai">(GMT+04:00) Asia/Dubai</option>
                  <option value="America/New_York">(GMT-05:00) America/New_York</option>
                  <option value="America/Los_Angeles">(GMT-08:00) America/Los_Angeles</option>
                  <option value="Australia/Sydney">(GMT+11:00) Australia/Sydney</option>
                </select>
              </div>
              <!-- Country -->
              <div class="space-y-2">
                <label class="flex items-center gap-1.5 text-on-surface font-semibold text-label-md">
                  Country:
                  <span class="group relative inline-flex">
                    <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                    <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                      The default country code will show based on the country you select.
                    </span>
                  </span>
                </label>
                <select class="w-full js-select2" data-allow-clear="false">
                  <option value="AF" selected>Afghanistan</option>
                  <option value="US">United States</option>
                  <option value="GB">United Kingdom</option>
                  <option value="IN">India</option>
                  <option value="DE">Germany</option>
                  <option value="FR">France</option>
                  <option value="AU">Australia</option>
                  <option value="CA">Canada</option>
                </select>
              </div>
              <!-- CSV Data Retention -->
              <div class="space-y-2">
                <label class="flex items-center gap-1.5 text-on-surface font-semibold text-label-md">
                  CSV Data Retention:
                  <span class="group relative inline-flex">
                    <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                    <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                      You can import and export CSV files in our system.
                    </span>
                  </span>
                </label>
                <div class="flex items-stretch rounded-lg border border-outline-variant bg-surface-container-low overflow-hidden focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all">
                  <input type="text" disabled
                    class="flex-1 w-full bg-transparent py-3 px-4 text-body-md focus:outline-none border-0 focus:ring-0 cursor-not-allowed">
                  <span class="flex items-center px-4 text-body-md font-semibold text-secondary bg-surface-container-high border-l border-outline-variant">days</span>
                </div>
                <p class="text-label-sm text-outline">Default value is 365 days</p>
              </div>
              <!-- Slug -->
              <div class="space-y-2">
                <label class="flex items-center gap-1.5 text-on-surface font-semibold text-label-md">
                  Slug:
                  <span class="group relative inline-flex">
                    <span class="material-symbols-outlined text-[15px] text-outline">help</span>
                    <span class="pointer-events-none absolute bottom-full left-1/2 mb-2 -translate-x-1/2 w-max max-w-[240px] whitespace-normal text-center leading-snug rounded-lg border border-outline-variant/70 bg-surface-container-high/80 px-3 py-1.5 text-body-sm text-on-surface shadow-sm backdrop-blur-sm opacity-0 transition-opacity duration-150 group-hover:opacity-100 z-20">
                      This is the account slug.
                    </span>
                  </span>
                </label>
                <input type="text" disabled
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-not-allowed">
              </div>
            </div>

            <div class="flex justify-center mt-6 pt-5 border-t border-outline-variant/40">
              <button type="submit"
                class="flex items-center gap-2 bg-emerald-500 text-white px-7 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-emerald-500/20 hover:opacity-95 active:scale-[0.98] transition-all">
                <span class="material-symbols-outlined text-[20px]">save</span>
                Save
              </button>
            </div>
          </form>
        <!-- </div> -->
      <!-- </section> -->
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
  <script>
    (function () {
      var menus = document.querySelectorAll('.js-menu');
      function closeAll(except) {
        menus.forEach(function (m) {
          if (m !== except) m.querySelector('.js-menu-panel').classList.add('hidden');
        });
      }
      menus.forEach(function (menu) {
        var toggle = menu.querySelector('.js-menu-toggle');
        var panel = menu.querySelector('.js-menu-panel');
        toggle.addEventListener('click', function (e) {
          e.stopPropagation();
          var isHidden = panel.classList.contains('hidden');
          closeAll(menu);
          panel.classList.toggle('hidden', !isHidden);
        });
      });
      document.addEventListener('click', function () { closeAll(null); });
    })();
  </script>
</body>

</html>