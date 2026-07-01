<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Company View</title>
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
      <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
        <div class="space-y-1.5">
          <nav class="flex items-center gap-2 text-label-sm">
            <span class="material-symbols-outlined text-[14px] text-slate-400">home</span>
            <a href="index.php" class="font-normal text-slate-400 hover:text-primary transition-colors">Dashboard</a>
            <span class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>
            <a href="company.php" class="font-normal text-slate-400 hover:text-primary transition-colors">Companies Users</a>
            <span class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>
            <span class="text-gray-500 font-normal">Company View</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold text-on-surface">Company View</h2>
        </div>
        <a href="company.php"
          class="inline-flex items-center gap-2 rounded-lg border border-outline-variant/50 bg-surface px-5 py-2.5 text-body-md font-bold text-on-surface shadow-sm transition-all hover:bg-surface-container-high active:scale-[0.98]">
          <span class="material-symbols-outlined text-[19px]">arrow_back</span>
          Back
        </a>
      </div>

      <!-- Stat Counters -->
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
        <!-- Total Templates -->
        <div class="flex items-center gap-4 rounded-2xl border border-outline-variant/60 bg-surface px-5 py-4 shadow-sm">
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-600">
            <span class="material-symbols-outlined text-[24px]">style</span>
          </span>
          <div class="min-w-0">
            <p class="text-label-sm text-outline font-medium">Total Templates</p>
            <p class="text-headline-md font-bold text-on-surface">123</p>
          </div>
        </div>
        <!-- Total Records -->
        <div class="flex items-center gap-4 rounded-2xl border border-outline-variant/60 bg-surface px-5 py-4 shadow-sm">
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary">
            <span class="material-symbols-outlined text-[24px]">description</span>
          </span>
          <div class="min-w-0">
            <p class="text-label-sm text-outline font-medium">Total Records</p>
            <p class="text-headline-md font-bold text-on-surface">152</p>
          </div>
        </div>
        <!-- Total Installs -->
        <div class="flex items-center gap-4 rounded-2xl border border-outline-variant/60 bg-surface px-5 py-4 shadow-sm">
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-rose-500/10 text-rose-600">
            <span class="material-symbols-outlined text-[24px]">download</span>
          </span>
          <div class="min-w-0">
            <p class="text-label-sm text-outline font-medium">Total Installs</p>
            <p class="text-headline-md font-bold text-on-surface">165</p>
          </div>
        </div>
      </div>

      <!-- Main Grid -->
      <div class="grid grid-cols-1 gap-stack-lg lg:grid-cols-12">
        <!-- LEFT: Company Profile -->
        <aside class="lg:col-span-4 xl:col-span-3">
          <div class="lg:sticky lg:top-24 overflow-hidden rounded-2xl border border-outline-variant/60 bg-surface p-3 shadow-sm">
            <!-- Gradient Identity Header -->
            <div class="relative overflow-hidden rounded-2xl bg-brand-gradient px-6 py-7 text-center">
              <!-- Decorative circles -->
              <span class="pointer-events-none absolute -right-6 -top-6 h-28 w-28 rounded-full bg-white/10"></span>
              <span class="pointer-events-none absolute -bottom-8 -left-8 h-28 w-28 rounded-full bg-white/10"></span>
              <div class="relative">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 px-3 py-1 text-label-sm font-bold uppercase tracking-wider text-white backdrop-blur-sm">
                  <span class="material-symbols-outlined text-[16px] font-variation-fill">star</span>
                  Active
                </span>
                <h4 class="text-display-md font-bold mt-4 leading-none text-white">Lani Fisher</h4>
                <span class="mt-3 inline-block rounded-full bg-white/20 px-4 py-1 text-body-md font-semibold text-white backdrop-blur-sm">
                  Hewitt and Copeland Trading
                </span>
              </div>
            </div>

            <!-- Details -->
            <dl class="divide-y divide-outline-variant/50 px-3 pt-2">
              <!-- Email -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary">
                  <span class="material-symbols-outlined text-[18px]">mail</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Email</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">dimaromy@mailinator.com</dd>
                </div>
              </div>
              <!-- Agent -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-emerald-500/10 text-emerald-600">
                  <span class="material-symbols-outlined text-[18px]">contact_page</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Agent</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">Jenil Vora</dd>
                </div>
              </div>
              <!-- Brand Name -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-amber-500/10 text-amber-600">
                  <span class="material-symbols-outlined text-[18px]">bookmark</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Brand Name</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">We Pass</dd>
                </div>
              </div>
              <!-- Support Phone -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-rose-500/10 text-rose-600">
                  <span class="material-symbols-outlined text-[18px]">call</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Support Phone</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">+91 1234567890</dd>
                </div>
              </div>
              <!-- Support Website -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary">
                  <span class="material-symbols-outlined text-[18px]">language</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Support Website</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">http://localhost:8001/companyusershow.php</dd>
                </div>
              </div>
              <!-- Created -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-emerald-500/10 text-emerald-600">
                  <span class="material-symbols-outlined text-[18px]">event</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Created</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">15/06/2026 06:41:53</dd>
                </div>
              </div>
              <!-- Last Login -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-amber-500/10 text-amber-600">
                  <span class="material-symbols-outlined text-[18px]">schedule</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Last Login</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">15/06/2026 06:41:53</dd>
                </div>
              </div>
            </dl>
          </div>
        </aside>

        <!-- RIGHT: Edit Form -->
        <div class="lg:col-span-8 xl:col-span-9">
          <form action="#" method="post">
            <div class="p-6 overflow-hidden rounded-2xl border border-outline-variant/60 bg-surface shadow-sm">
              <!-- Card Header -->
              <div class="flex items-center gap-3 border-outline-variant/60">
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-primary/10 text-primary">
                  <span class="material-symbols-outlined text-[20px]">edit_square</span>
                </span>
                <h3 class="text-headline-md font-bold text-on-surface">Edit Company Details</h3>
              </div>

              <div class="space-y-stack-lg py-6">
                <!-- Company Information -->
                <fieldset class="space-y-5">
                  <div class="grid grid-cols-1 gap-x-6 gap-y-5 md:grid-cols-2">
                    <div class="space-y-1.5">
                      <label for="company_name" class="flex items-center text-on-surface font-semibold text-label-md">Company Name:</label>
                      <input id="company_name" name="company_name" type="text" value="Hewitt and Copeland Trading"
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pr-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                      <label for="name" class="flex items-center text-on-surface font-semibold text-label-md">Name:</label>
                      <input id="name" name="name" type="text" value="Lani Fisher"
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pr-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                      <label for="email" class="flex items-center text-on-surface font-semibold text-label-md">
                        Email:<span class="text-error">*</span>
                      </label>
                      <input id="email" name="email" type="email" required value="dimaromy@mailinator.com"
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pr-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                      <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Status: <span class="text-red-500">*</span>
                      </label>
                      <div class="inline-flex items-center gap-1 py-2 px-3 bg-surface-container-low border border-outline-variant rounded-lg ">
                        <!-- Active -->
                        <label class="group relative flex items-center gap-1.5 cursor-pointer rounded-md px-3 py-1.5 transition-colors">
                            <input type="radio" name="status" value="active" checked class="peer sr-only">
                            <span
                                class="absolute inset-0 rounded-md bg-emerald-500/10 ring-1 ring-emerald-500/30 opacity-0 transition-opacity duration-200 peer-checked:opacity-100"></span>
                            <span
                                class="relative material-symbols-outlined text-[16px] text-outline transition-colors peer-checked:text-emerald-600"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span
                                class="relative text-label-md font-semibold text-secondary transition-colors peer-checked:text-emerald-600">Active</span>
                        </label>
                        <!-- Inactive -->
                        <label class="group relative flex items-center gap-1.5 cursor-pointer rounded-md px-3 py-1.5 transition-colors">
                            <input type="radio" name="status" value="inactive" class="peer sr-only">
                            <span
                                class="absolute inset-0 rounded-md bg-red-500/10 ring-1 ring-red-500/30 opacity-0 transition-opacity duration-200 peer-checked:opacity-100"></span>
                            <span
                                class="relative material-symbols-outlined text-[16px] text-outline transition-colors peer-checked:text-red-600"
                                style="font-variation-settings: 'FILL' 1;">cancel</span>
                            <span
                                class="relative text-label-md font-semibold text-secondary transition-colors peer-checked:text-red-600">Inactive</span>
                        </label>
                        <!-- Pending -->
                        <label class="group relative flex items-center gap-1.5 cursor-pointer rounded-md px-3 py-1.5 transition-colors">
                            <input type="radio" name="status" value="Pending" class="peer sr-only">

                            <span
                                class="absolute inset-0 rounded-md bg-amber-500/10 ring-1 ring-amber-500/30 opacity-0 transition-opacity duration-200 peer-checked:opacity-100">
                            </span>

                            <span
                                class="relative material-symbols-outlined text-[16px] text-outline transition-colors peer-checked:text-amber-600"
                                style="font-variation-settings: 'FILL' 1;">
                                schedule
                            </span>

                            <span
                                class="relative text-label-md font-semibold text-secondary transition-colors peer-checked:text-amber-600">
                                Pending
                            </span>
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <!-- Security -->
                <fieldset class="space-y-5">
                  <div class="grid grid-cols-1 gap-x-6 gap-y-5 md:grid-cols-2">
                    <div class="space-y-1.5">
                      <label for="new_password" class="flex items-center text-on-surface font-semibold text-label-md">New Password:</label>
                     <div class="relative">
                       <input type="password" id="password" placeholder="Enter Password"
                           class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                       <button type="button" data-toggle-password="password"
                           class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                     </div>
                    </div>
                    <div class="space-y-1.5">
                      <label for="confirm_password" class="flex items-center text-on-surface font-semibold text-label-md">Confirm New Password:</label>
                      <div class="relative">
                        <input type="password" id="confirm_password" placeholder="Enter Confirm Password"
                            class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <button type="button" data-toggle-password="confirm_password"
                            class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>

              <!-- Card Footer / Actions -->
              <div class="flex flex-col-reverse items-stretch gap-3 border-t border-outline-variant/60 pt-5 sm:flex-row sm:items-center sm:justify-between">
                <button type="button"
                  class="flex items-center gap-2 bg-red-500 text-white px-7 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-red-500/20 hover:opacity-95 active:scale-[0.98] transition-all">
                  <span class="material-symbols-outlined text-[19px]">delete</span>
                  Delete Company
                </button>
                <button type="submit"
                  class="flex items-center gap-2 bg-[#198754] text-white px-7 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
                  <span class="material-symbols-outlined text-[19px]">save</span>
                  Update
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
  <?php include('script.php'); ?>
  <script>
     document.querySelectorAll('[data-toggle-password]').forEach(function (btn) {
       btn.addEventListener('click', function () {
         var input = document.getElementById(btn.getAttribute('data-toggle-password'));
         if (!input) return;
         var show = input.type === 'password';
         input.type = show ? 'text' : 'password';
         btn.textContent = show ? 'visibility_off' : 'visibility';
       });
     });
   </script>
</body>

</html>
