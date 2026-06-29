<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Dashboard</title>
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
      <!-- Page Header -->
      <div class="flex flex-wrap items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray font-normal">Settings</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Settings</h2>
        </div>
      </div>

      <!-- User Subscription Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card Header -->
        <div class="flex items-center gap-4 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-11 h-11 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
            <span class="material-symbols-outlined text-[24px]">settings</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">User Subscription</h3>
            <p class="text-body-md text-gray-400">Manage default subscription limits</p>
          </div>
        </div>

        <!-- Card Body -->
        <form action="#" method="POST" class="p-6 lg:p-8 space-y-stack-lg">
          <!-- Info Banner -->
          <div class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-xl p-4">
            <span class="w-7 h-7 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[18px]">info</span>
            </span>
            <p class="text-body-md text-gray-500 leading-relaxed self-center">
              These settings define the <span class="font-bold">default limits</span> assigned to every new user upon registration. Changes will only apply to <span class="font-bold">newly created accounts</span>.
            </p>
          </div>

          <!-- Fields Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
            <!-- Number of Templates -->
            <div class="space-y-2">
              <label for="num_templates" class="flex items-center text-on-surface font-semibold text-label-md">
                Number of Templates: <span class="text-error">*</span>
              </label>
              <input type="number" min="0" required id="num_templates" name="num_templates" value="8"
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
              <p class="text-label-md text-gray-400">Max pass templates a user can create</p>
            </div>

            <!-- Number of Passes -->
            <div class="space-y-2">
              <label for="num_passes" class="flex items-center text-on-surface font-semibold text-label-md">
                Number of Passes: <span class="text-error">*</span>
              </label>
              <input type="number" min="0" required id="num_passes" name="num_passes" value="50"
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
              <p class="text-label-md text-gray-400">Max digital passes a user can issue</p>
            </div>

            <!-- Number of Push Notifications -->
            <div class="space-y-2">                                                                         
              <label for="num_notifications" class="flex items-center text-on-surface font-semibold text-label-md">
                Number of Push Notifications: <span class="text-error">*</span>
              </label>
              <input type="number" min="0" required id="num_notifications" name="num_notifications" value="5"
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface  placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
              <p class="text-label-md text-gray-400">Max push notifications a user can send</p>
            </div>

            <!-- Number of Expiry Days -->
            <div class="space-y-2">
              <label for="num_expiry_days" class="flex items-center text-on-surface font-semibold text-label-md">
                Number of Expiry Days: <span class="text-error">*</span>
              </label>
              <input type="number" min="0" required id="num_expiry_days" name="num_expiry_days" value="5"
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface  placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
              <p class="text-label-md text-gray-400">Days until the subscription expires</p>
            </div>

            <!-- User Creation Limit -->
            <div class="space-y-2">
              <label for="user_creation_limit" class="flex items-center text-on-surface font-semibold text-label-md">
                User Creation Limit: <span class="text-error">*</span>
              </label>
              <input type="number" min="0" required id="user_creation_limit" name="user_creation_limit" value="10"
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface  placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
              <p class="text-label-md text-gray-400">Max users a company can create</p>
            </div>
          </div>

          <!-- Actions -->
          <div class="flex justify-center mt-6 pt-6 border-t border-outline-variant/40">
            <button type="submit"
              class="inline-flex items-center gap-2 bg-[#198754] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
              <span class="material-symbols-outlined text-[20px]">save</span> Update
            </button>
          </div>
        </form>
      </div>

      <!-- System Configuration Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Card Header -->
        <div class="flex items-center gap-4 px-6 py-5 border-b border-outline-variant/60">
          <div class="w-11 h-11 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
            <span class="material-symbols-outlined text-[24px]">tune</span>
          </div>
          <div>
            <h3 class="text-headline-md font-bold text-on-surface tracking-tight">System Configuration</h3>
            <p class="text-body-md text-gray-400">Manage API rate limits and queue batch settings</p>
          </div>
        </div>

        <!-- Card Body -->
        <form action="#" method="POST" class="p-6 lg:p-8 space-y-stack-lg">
          <!-- Info Banner -->
          <div class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-xl p-4">
            <span class="w-7 h-7 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-[18px]">info</span>
            </span>
            <p class="text-body-md text-gray-500 leading-relaxed self-center">
              These settings define the <span class="font-bold">API rate limiting</span> and <span class="font-bold">queue batch processing</span>. Changes take effect immediately.
            </p>
          </div>

          <!-- Fields Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
            <!-- API Rate Limit -->
            <div class="space-y-2">
              <label for="api_rate_limit" class="flex items-center text-on-surface font-semibold text-label-md">
                API Rate Limit: <span class="text-error">*</span>
              </label>
              <input type="number" min="0" required id="api_rate_limit" name="api_rate_limit" value="300"
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface  placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
              <p class="text-label-md text-gray-400">Max API requests allowed per second per IP</p>
            </div>

            <!-- Queue Batch Size -->
            <div class="space-y-2">
              <label for="queue_batch_size" class="flex items-center text-on-surface font-semibold text-label-md">
                Queue Batch Size: <span class="text-error">*</span>
              </label>
              <input type="number" min="0" required id="queue_batch_size" name="queue_batch_size" value="500"
                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface  placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
              <p class="text-label-md text-gray-400">Number of records processed per queue batch</p>
            </div>

            <!-- Google Maps API -->
            <div class="space-y-2">
              <label class="text-on-surface font-semibold text-label-md">Google Maps API Key:</label>
              <input placeholder="Enter Google Maps API Key" class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" type="text">
              <p class="text-label-md text-gray-400">Used to load Google Maps on store create/update</p>
            </div>            
          </div>

          <!-- Actions -->
          <div class="flex justify-center mt-6 pt-6 border-t border-outline-variant/40">
            <button type="submit"
              class="inline-flex items-center gap-2 bg-[#198754] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
              <span class="material-symbols-outlined text-[20px]">save</span> Update
            </button>
          </div>
        </form>
      </div>

    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>
