<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Business Settings</title>
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
      <div class="space-y-1.5">
        <nav class="flex items-center gap-2 text-label-sm">
          <span class="material-symbols-outlined text-[14px] text-slate-400">home</span>
          <a href="index.php" class="font-normal text-slate-400 hover:text-primary transition-colors">Dashboard</a>
          <span class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>
          <span class="text-gray-500 font-normal">Business Settings</span>
        </nav>
        <h2 class="font-display tracking-tight text-headline-lg font-bold text-on-surface">Business Settings</h2>
      </div>

      <!-- Intro Banner -->
      <div class="bg-white border border-outline-variant rounded-2xl p-6 flex flex-col gap-4">
            <div class="flex gap-6 items-start">
                <div
                    class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
                    <span class="material-symbols-outlined text-[28px]">settings</span>
                </div>
                <div class="flex-1">
                    <h3 class="text-headline-md font-bold text-on-surface tracking-tight">Business Profile Settings</h3>
                    <p class="text-body-md leading-relaxed text-gray-400">Manage your business profile information and account security settings. Update your business name, personal details, and change your login password. Your email and role are assigned by the system administrator and cannot be modified here.
                    </p>
                    <!-- Steps -->
                    <div class="bg-primary/5 rounded-2xl p-2 flex flex-wrap items-center gap-3  mt-4">
                        <!-- Step 1 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Update Business Info</span>
                        </div>
                        <!-- Step 2 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Manage Account Name</span>
                        </div>
                        <!-- Step 3 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Change Password</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <!-- Edit Form Card -->
      <form action="#" method="post">
        <div class="p-6 overflow-hidden rounded-2xl border border-outline-variant/60 bg-surface shadow-sm">
          <!-- Card Header -->
          <div class="flex items-center gap-3 border-outline-variant/60  mb-6">
            <div class="w-9 h-9 bg-blue-50 text-primary rounded-lg flex items-center justify-center">
              <span class="material-symbols-outlined text-[20px]">work</span>
            </div>
            <!-- <span class="material-symbols-outlined text-[22px] text-primary">work</span> -->
            <h3 class="text-headline-md font-bold text-on-surface">Edit Business Profile</h3>
          </div>

          <div class="space-y-stack-lg pb-6">
            <!-- Business Information -->
            <fieldset class="space-y-4">
              <div class="grid grid-cols-1 gap-x-6 gap-y-5 md:grid-cols-2">
                <div class="space-y-1.5">
                  <label for="business_name" class="text-on-surface font-semibold text-label-md">
                    Business Name:<span class="text-error">*</span>
                  </label>
                  <input id="business_name" name="business_name" type="text" required
                    value="Prince Men's wear"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
                <div class="space-y-1.5">
                  <label for="name" class="text-on-surface font-semibold text-label-md">Name:</label>
                  <input id="name" name="name" type="text"
                    value="Jenil Vora"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
              </div>
            </fieldset>

            <!-- Account Information -->
            <fieldset class="space-y-4">
              <div class="grid grid-cols-1 gap-x-6 gap-y-5 md:grid-cols-2">
                <div class="space-y-1.5">
                  <label for="email" class="text-on-surface font-semibold text-label-md">
                    Email: <span class="material-symbols-outlined text-[16px] text-outline">lock</span>
                  </label>
                  <input id="email" name="email" type="email" readonly disabled
                    value="clgproject5th@gmail.com"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
                <div class="space-y-1.5">
                  <label for="role" class="text-on-surface font-semibold text-label-md">
                    Role: <span class="material-symbols-outlined text-[16px] text-outline">lock</span>
                  </label>
                  <input id="role" name="role" type="text" readonly disabled
                    value="Owner"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
              </div>
            </fieldset>

            <!-- Security -->
            <fieldset class="space-y-4">
              <div class="grid grid-cols-1 gap-x-6 gap-y-5 md:grid-cols-2">
                <div class="space-y-1.5">
                  <label for="new_password" class="text-on-surface font-semibold text-label-md">New Password:</label>
                  <div class="relative">
                      <input type="password" id="password" placeholder="Enter a New Password"
                          class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                      <button type="button" data-toggle-password="password"
                          class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                  </div>
                </div>
                <div class="space-y-1.5">
                  <label for="confirm_password" class="text-on-surface font-semibold text-label-md">Confirm New Password:</label>
                  <div class="relative">
                      <input type="password" id="confirm_password" placeholder="Enter a New Confirm Password"
                          class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                      <button type="button" data-toggle-password="confirm_password"
                          class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                  </div>
                </div>
              </div>
              <p class="flex items-center gap-1.5 text-label-sm text-outline">
                <span class="material-symbols-outlined text-[16px]">info</span>
                Leave the password fields blank if you do not want to change it.
              </p>
            </fieldset>
          </div>

          <!-- Card Footer / Actions -->
          <div class="flex items-center justify-center gap-3 border-t border-outline-variant/60 px-6 pt-6">
            <!-- <button type="reset"
              class="leading-[21px] inline-flex items-center justify-center gap-2 rounded-lg border border-outline-variant bg-surface px-5 py-2.5 text-body-md font-bold text-on-surface-variant transition-all hover:bg-surface-container-high active:scale-[0.98]">
              Cancel
            </button> -->
            <button type="submit"
              class="flex items-center gap-2 bg-[#198754] text-white px-7 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
              <span class="material-symbols-outlined text-[19px]">save</span>
              <span>Submit</span>
            </button>
          </div>
        </div>
      </form>
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
