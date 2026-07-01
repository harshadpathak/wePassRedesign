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
        <a href="users.php"
          class="inline-flex items-center gap-2 rounded-lg border border-outline-variant/50 bg-surface px-5 py-2.5 text-body-md font-bold text-on-surface shadow-sm transition-all hover:bg-surface-container-high active:scale-[0.98]">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>

      <!-- Main Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Body -->
        <div class="p-6">
          <div class="grid grid-cols-1 gap-stack-lg lg:grid-cols-12 items-start">
        <!-- LEFT: User Profile -->
        <aside class="lg:col-span-4 xl:col-span-3">
          <div class="overflow-hidden rounded-2xl border border-outline-variant/60 bg-surface shadow-sm">
            <!-- Identity Header -->
            <div class="relative overflow-hidden bg-brand-gradient px-6 pt-7 pb-6 text-center text-white">
              <span class="pointer-events-none absolute -right-8 -top-8 h-28 w-28 rounded-full bg-white/10"></span>
              <span class="pointer-events-none absolute -bottom-10 -left-6 h-24 w-24 rounded-full bg-white/10"></span>
              <div class="relative flex flex-col items-center">
                <span class="flex h-16 w-16 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm ring-2 ring-white/40 text-white text-headline-lg font-bold tracking-wide">SU</span>
                <h4 class="mt-3.5 text-headline-md font-bold leading-tight">Stelios User</h4>
                <span class="mt-2 inline-flex items-center gap-1.5 rounded-full bg-white/20 backdrop-blur-sm px-3.5 py-1 text-label-md font-semibold">
                  <span class="material-symbols-outlined text-[15px]">apartment</span>Wepass Test
                </span>
              </div>
            </div>

            <!-- Details -->
            <dl class="divide-y divide-outline-variant/50 px-5">
              <!-- Email -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary">
                  <span class="material-symbols-outlined text-[18px]">mail</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Email</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">stelios@wepass.io</dd>
                </div>
              </div>
              <!-- Agent -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-indigo-500/10 text-indigo-600">
                  <span class="material-symbols-outlined text-[18px]">badge</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Agent</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">Harsh</dd>
                </div>
              </div>
              <!-- VAT Number -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-amber-500/10 text-amber-600">
                  <span class="material-symbols-outlined text-[18px]">receipt_long</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Vat Number</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">-</dd>
                </div>
              </div>
              <!-- Created -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-indigo-500/10 text-indigo-600">
                  <span class="material-symbols-outlined text-[18px]">event</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Created</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">12/06/2026 10:59:58</dd>
                </div>
              </div>
              <!-- Last Login -->
              <div class="flex items-center gap-3 py-3.5">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-gray-100 text-gray-500">
                  <span class="material-symbols-outlined text-[18px]">schedule</span>
                </span>
                <div class="min-w-0">
                  <dt class="text-label-sm uppercase tracking-wider text-outline font-bold">Last Login</dt>
                  <dd class="truncate text-body-md font-bold text-on-surface">-</dd>
                </div>
              </div>
            </dl>
          </div>
        </aside>

        <!-- RIGHT: Edit Form -->
        <div class="lg:col-span-8 xl:col-span-9">
          <form action="#" method="post">
            <!-- Header -->
            <div class="flex items-center gap-3 mb-6">
              <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-primary/10 text-primary">
                <span class="material-symbols-outlined text-[20px]">edit_square</span>
              </span>
              <h3 class="text-headline-md font-bold text-on-surface">Edit Admin Details</h3>
            </div>
            <div class="space-y-stack-lg pb-5">
                <!-- Company Information -->
                <fieldset class="space-y-5">
                  <div class="flex items-center gap-3">
                    <h4 class="text-headline-md font-bold text-on-surface whitespace-nowrap">Company Information</h4>
                    <div class="flex-1 border-t border-outline-variant/40"></div>
                  </div>
                  <div class="grid grid-cols-1 gap-x-6 gap-y-5 md:grid-cols-2">
                    <div class="space-y-1.5">
                      <label for="company_name" class="flex items-center text-on-surface font-semibold text-label-md">Company Name:</label>
                      <input id="company_name" name="company_name" type="text" value="Wepass Test"
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pr-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                      <label for="name" class="flex items-center text-on-surface font-semibold text-label-md">Name:</label>
                      <input id="name" name="name" type="text" value="Stelios User"
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pr-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                      <label for="email" class="flex items-center text-on-surface font-semibold text-label-md">
                        Email:<span class="text-error">*</span>
                      </label>
                      <input id="email" name="email" type="email" required value="stelios@wepass.io"
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
                    <!-- Role -->
                    <div class="space-y-1.5">
                      <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Role: <span class="text-red-500">*</span>
                      </label>
                      <div class="inline-flex items-center gap-1 py-2 px-3 bg-surface-container-low border border-outline-variant rounded-lg">
                        <!-- Manager -->
                        <label class="group relative flex items-center gap-1.5 cursor-pointer rounded-md px-3 py-1.5 transition-colors">
                            <input type="radio" name="role" value="manager" checked class="peer sr-only">
                            <span
                                class="absolute inset-0 rounded-md bg-emerald-500/10 ring-1 ring-emerald-500/30 opacity-0 transition-opacity duration-200 peer-checked:opacity-100"></span>
                            <span
                                class="relative material-symbols-outlined text-[16px] text-outline transition-colors peer-checked:text-emerald-600"
                                style="font-variation-settings: 'FILL' 1;">manage_accounts</span>
                            <span
                                class="relative text-label-md font-semibold text-secondary transition-colors peer-checked:text-emerald-600">Manager</span>
                        </label>
                        <!-- Read Only -->
                        <label class="group relative flex items-center gap-1.5 cursor-pointer rounded-md px-3 py-1.5 transition-colors">
                            <input type="radio" name="role" value="readonly" class="peer sr-only">
                            <span
                                class="absolute inset-0 rounded-md bg-emerald-500/10 ring-1 ring-emerald-500/30 opacity-0 transition-opacity duration-200 peer-checked:opacity-100"></span>
                            <span
                                class="relative material-symbols-outlined text-[16px] text-outline transition-colors peer-checked:text-emerald-600"
                                style="font-variation-settings: 'FILL' 1;">visibility</span>
                            <span
                                class="relative text-label-md font-semibold text-secondary transition-colors peer-checked:text-emerald-600">Read Only</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <!-- Security -->
                <fieldset class="space-y-5">
                  <div class="flex items-center gap-3">
                    <h4 class="text-headline-md font-bold text-on-surface whitespace-nowrap">Security</h4>
                    <div class="flex-1 border-t border-outline-variant/40"></div>
                  </div>
                  <div class="grid grid-cols-1 gap-x-6 gap-y-5 md:grid-cols-2">
                    <div class="space-y-1.5">
                      <label for="new_password" class="flex items-center text-on-surface font-semibold text-label-md">New Password:</label>
                     <div class="relative">
                       <input type="password" id="password" placeholder="Enter Password"
                           class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                       <button type="button" data-toggle-password="password"
                           class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                     </div>
                    </div>
                    <div class="space-y-1.5">
                      <label for="confirm_password" class="flex items-center text-on-surface font-semibold text-label-md">Confirm New Password:</label>
                      <div class="relative">
                        <input type="password" id="confirm_password" placeholder="Enter Confirm Password"
                            class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <button type="button" data-toggle-password="confirm_password"
                            class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <!-- Subscription Plan -->
                <fieldset class="space-y-5">
                  <div class="flex items-center gap-3">
                    <h4 class="text-headline-md font-bold text-on-surface whitespace-nowrap">Subscription Plan</h4>
                    <div class="flex-1 border-t border-outline-variant/40"></div>
                  </div>
                  <div class="grid grid-cols-1 gap-x-6 gap-y-5 md:grid-cols-2">
                    <div class="space-y-1.5">
                      <label class="flex items-center text-on-surface font-semibold text-label-md">Number of Templates: <span class="text-red-500 ml-0.5">*</span></label>
                      <input type="number" value="100" required
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                      <label class="flex items-center text-on-surface font-semibold text-label-md">Number of Passes: <span class="text-red-500 ml-0.5">*</span></label>
                      <input type="number" value="100" required
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                      <label class="flex items-center text-on-surface font-semibold text-label-md">Number of Push Notifications: <span class="text-red-500 ml-0.5">*</span></label>
                      <input type="number" value="100" required
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                      <label class="flex items-center text-on-surface font-semibold text-label-md">Number of Expiry Days: <span class="text-red-500 ml-0.5">*</span></label>
                      <input type="number" value="365" required
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="space-y-1.5">
                      <label class="flex items-center text-on-surface font-semibold text-label-md">User Creation Limit:</label>
                      <input type="number" placeholder="Enter User Creation Limit"
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                  </div>
                </fieldset>

                <!-- Agent Settings -->
                <fieldset class="space-y-5">
                  <div class="flex items-center gap-3">
                    <h4 class="text-headline-md font-bold text-on-surface whitespace-nowrap">Agent Settings</h4>
                    <div class="flex-1 border-t border-outline-variant/40"></div>
                  </div>
                  <div class="space-y-1.5">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">Full Access</label>
                    <label class="relative inline-flex items-center cursor-pointer">
                      <input type="checkbox" name="full_access" value="1" class="sr-only peer">
                      <span class="w-11 h-6 bg-gray-200 rounded-full transition-colors peer-checked:bg-primary peer-focus:ring-2 peer-focus:ring-primary/30"></span>
                      <span class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full shadow transition-transform duration-200 peer-checked:translate-x-5"></span>
                    </label>
                  </div>
                </fieldset>
              </div>
              <!-- Card Footer / Actions -->
              <div class="flex flex-col-reverse items-stretch gap-3 border-t border-outline-variant/60 pt-6 sm:flex-row sm:items-center sm:justify-between">
                <button type="button"
                  class="inline-flex items-center gap-2 bg-white border border-red-300 text-red-600 px-5 py-2.5 rounded-lg text-[14px] hover:bg-red-50 active:scale-[0.98] transition-all font-bold">
                  <span class="material-symbols-outlined text-[18px]">delete</span>
                  Delete
                </button>
                <button type="submit"
                  class="inline-flex items-center gap-2 bg-[#198754] text-white px-5 py-2.5 rounded-lg text-[14px] shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all font-bold">
                  <span class="material-symbols-outlined text-[18px]">save</span>
                  Update
                </button>
              </div>
            </form>
          </div>
          </div>
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