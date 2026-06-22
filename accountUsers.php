<!DOCTYPE html>
<html class="light" lang="en" style="">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Account User</title>
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
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-blue-600">home</span> <span class="text-blue-600 font-semibold">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Account Users</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Account Users</h2>
        </div>
        <div class="flex items-center gap-3">
          <a href ="createUser.php"
            class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">add</span>
            Create User
          </a>
        </div>
      </div>

      <!-- Role Badges Info -->
      <div class="bg-primary/5 rounded-2xl p-2 flex flex-wrap items-center justify-end gap-3">
          <!-- Manager -->
          <div
              class="flex items-center gap-2.5 bg-white rounded-2xl pl-1 pr-4 py-1 shadow-sm border border-outline-variant/40 transition-transform hover:-translate-y-0.5">
              <div class="w-9 h-9 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">manage_accounts</span>
              </div>
              <span class="text-body-md font-bold text-on-surface">Manager</span>
          </div>
          <!-- Read Only -->
          <div
              class="flex items-center gap-2.5 bg-white rounded-2xl pl-1 pr-4 py-1 shadow-sm border border-outline-variant/40 transition-transform hover:-translate-y-0.5">
              <div class="w-9 h-9 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                  <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">visibility</span>
              </div>
              <span class="text-body-md font-bold text-on-surface">Read Only</span>
          </div>
      </div>

      <!-- Users Card -->
      <section class="bg-white rounded-2xl border border-outline-variant shadow-sm">
        <!-- Table -->
          <table class="w-full text-left border-collapse">
            <thead class="bg-surface-container-low/50">
              <tr>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">User</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Email Verify</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Last Login</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Role</th>
                <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
              <!-- Row -->
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- User -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                      <span class="material-symbols-outlined" style="font-variation-settings: &quot;FILL&quot; 1;">manage_accounts</span>
                    </div>
                    <div class="min-w-0">
                      <p class="text-body-md font-medium text-on-surface truncate">JENIL VORA</p>
                      <p class="text-label-sm text-outline whitespace-nowrap font-medium ">womaludy@mailinator.com</p>
                    </div>
                  </div>
                </td>
                <!-- Email Verify -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1 py-1 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap px-2">
                    <span class="material-symbols-outlined text-[15px]">verified</span>
                    Verified
                  </span>
                </td>
                <!-- Last Login -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">
                    04/06/2026 16:19:15
                </td>
                <!-- Created -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">
                    15/06/2026 06:19:09
                </td>
                <!-- Role -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1 py-1 rounded-full text-[10px] font-bold uppercase bg-blue-50 text-blue-600 border border-blue-100 whitespace-nowrap px-2"><span class="material-symbols-outlined text-[15px]">manage_accounts</span>Manager</span>
                </td>
                <!-- Action -->
                <td class="px-6 py-4 text-right">
                  <div class="relative inline-block text-left group/action">
                    <button
                      class="material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high"
                      onclick="this.nextElementSibling.classList.toggle('invisible'); this.nextElementSibling.classList.toggle('opacity-0')">
                      more_vert
                    </button>
                    <div
                      class="absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl opacity-0 invisible transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
                          href="#">
                          <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                          <span class="font-medium">Edit</span>
                        </a>
                        <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors"
                          href="#">
                          <span class="material-symbols-outlined text-[20px]">delete</span>
                          <span class="font-bold">Delete</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- Row -->
              <tr class="hover:bg-surface-container-low transition-colors group">
                <!-- User -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                      <span class="material-symbols-outlined" style="font-variation-settings: &quot;FILL&quot; 1;">visibility</span>
                    </div>
                    <div class="min-w-0">
                      <p class="text-body-md font-medium text-on-surface truncate">RAVI PATEL</p>
                      <p class="text-label-sm text-outline whitespace-nowrap font-medium ">ravipatel@mailinator.com</p>
                    </div>
                  </div>
                </td>
                <!-- Email Verify -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1 py-1 rounded-full text-[10px] font-bold uppercase bg-amber-50 text-amber-700 border border-amber-100 whitespace-nowrap px-2"><span class="material-symbols-outlined text-[15px]">error</span>Unverified</span>
                </td>
                <!-- Last Login -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">&ndash;</td>
                <!-- Created -->
                <td class="px-6 py-4 text-label-md text-on-surface-variant">20/06/2026 10:42:15</td>
                <!-- Role -->
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1 py-1 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap px-2"><span class="material-symbols-outlined text-[15px]">visibility</span>Read Only</span>
                </td>
                <!-- Action -->
                <td class="px-6 py-4 text-right">
                  <div class="relative inline-block text-left group/action">
                    <button
                      class="material-symbols-outlined text-outline hover:text-primary transition-colors p-1 rounded-lg hover:bg-surface-container-high"
                      onclick="this.nextElementSibling.classList.toggle('invisible'); this.nextElementSibling.classList.toggle('opacity-0')">
                      more_vert
                    </button>
                    <div
                      class="absolute right-0 mt-2 w-48 border border-outline-variant/50 rounded-xl shadow-xl opacity-0 invisible transition-all duration-200 z-50 overflow-hidden bg-white">
                      <div class="py-1.5">
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-on-surface hover:bg-surface-container-low transition-colors"
                          href="#">
                          <span class="material-symbols-outlined text-secondary text-[20px]">edit</span>
                          <span class="font-medium">Edit</span>
                        </a>
                        <div class="border-t border-outline-variant/30 my-1 mx-2"></div>
                        <a class="flex items-center gap-3 px-4 py-2 text-body-md text-error hover:bg-error-container/40 transition-colors"
                          href="#">
                          <span class="material-symbols-outlined text-[20px]">delete</span>
                          <span class="font-bold">Delete</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

        <!-- Card Footer -->
        <div class="flex items-center justify-end gap-1.5 px-6 py-3.5 border-t border-outline-variant/60 bg-surface-container-low/40">
          <span class="material-symbols-outlined text-[16px] text-emerald-500">cloud_sync</span>
          <span class="text-label-md text-on-surface-variant font-medium">Data updates near real time</span>
        </div>
      </section>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>