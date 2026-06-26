<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Pass Templates Management</title>
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
    <?php
      $user = [
        'name'    => 'wepass',
        'email'   => 'wepassdemo@wepass.com',
        'initial' => 'W',
        'role'    => 'Owner',
        'company' => 'Wepass Demo',
        'since'   => '23/01/2025',
        'login'   => '10 months ago',
      ];
    ?>
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">User Profile</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">User Profile</h2>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
        <!-- LEFT: Profile summary -->
        <aside class="lg:col-span-1 lg:sticky lg:top-24 space-y-6">
          <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <!-- Cover + avatar -->
            <div class="h-24 bg-brand-gradient"></div>
            <div class="px-6 pb-6 -mt-12 text-center">
              <div class="w-24 h-24 rounded-full bg-amber-400 text-white flex items-center justify-center text-display-sm font-bold mx-auto ring-4 ring-white shadow-md">
                <?= htmlspecialchars($user['initial']) ?>
              </div>
              <h3 class="text-headline-md font-bold text-on-surface mt-3"><?= htmlspecialchars($user['name']) ?></h3>
              <p class="text-label-md text-secondary"><?= htmlspecialchars($user['email']) ?></p>
              <span class="inline-flex items-center gap-1.5 mt-3 bg-primary/10 text-primary text-label-sm font-bold px-3 py-1 rounded-full">
                <span class="material-symbols-outlined text-[16px]">verified</span> <?= htmlspecialchars($user['role']) ?>
              </span>
            </div>

            <!-- Account info -->
            <div class="border-t border-outline-variant/60 px-6 py-5">
              <p class="text-label-sm font-bold uppercase tracking-wider text-outline mb-3">Account Information</p>
              <div class="divide-y divide-outline-variant/40">
                <div class="flex items-center gap-3 py-3">
                  <span class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">shield_person</span>
                  </span>
                  <div class="min-w-0">
                    <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Role</p>
                    <p class="text-body-md font-bold text-on-surface truncate"><?= htmlspecialchars($user['role']) ?></p>
                  </div>
                </div>
                <div class="flex items-center gap-3 py-3">
                  <span class="w-9 h-9 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">apartment</span>
                  </span>
                  <div class="min-w-0">
                    <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Company</p>
                    <p class="text-body-md font-bold text-on-surface truncate"><?= htmlspecialchars($user['company']) ?></p>
                  </div>
                </div>
                <div class="flex items-center gap-3 py-3">
                  <span class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                  </span>
                  <div class="min-w-0">
                    <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Member Since</p>
                    <p class="text-body-md font-bold text-on-surface truncate"><?= htmlspecialchars($user['since']) ?></p>
                  </div>
                </div>
                <div class="flex items-center gap-3 py-3">
                  <span class="w-9 h-9 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[18px]">login</span>
                  </span>
                  <div class="min-w-0">
                    <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Last Login</p>
                    <p class="text-body-md font-bold text-on-surface truncate"><?= htmlspecialchars($user['login']) ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>

        <!-- RIGHT: Forms -->
        <div class="lg:col-span-2 space-y-6">
          <!-- Edit Profile -->
          <form class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <div class="flex items-center gap-4 px-6 lg:px-8 py-5 border-b border-outline-variant/60">
              <div class="w-11 h-11 rounded-xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
                <span class="material-symbols-outlined text-[22px]">edit</span>
              </div>
              <div>
                <h3 class="text-headline-md font-bold text-on-surface">Edit Profile</h3>
                <p class="text-label-md text-gray-400">Update your personal information and preferences</p>
              </div>
            </div>

            <div class="p-6 lg:p-8 space-y-6">
              <!-- Personal Information -->
              <div class="rounded-2xl border border-outline-variant p-5">
                <div class="flex items-center gap-3 pb-4 mb-4 border-b border-outline-variant/60">
                  <span class="w-9 h-9 rounded-lg bg-blue-50 text-primary flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">person</span></span>
                  <div>
                    <h4 class="text-body-lg font-bold text-on-surface">Personal Information</h4>
                    <p class="text-label-md text-gray-400">Your basic account details.</p>
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div class="space-y-2">
                    <label class="text-on-surface font-bold text-label-md">Name</label>
                    <input type="text" value="<?= htmlspecialchars($user['name']) ?>"
                      class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                  </div>
                  <div class="space-y-2">
                    <label class="text-on-surface font-bold text-label-md">Email</label>
                    <input type="email" value="<?= htmlspecialchars($user['email']) ?>" readonly
                      class="w-full bg-surface-container-high/60 border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md text-secondary cursor-not-allowed">
                  </div>
                </div>
              </div>

              <!-- Account Settings -->
              <div class="rounded-2xl border border-outline-variant p-5">
                <div class="flex items-center gap-3 pb-4 mb-4 border-b border-outline-variant/60">
                  <span class="w-9 h-9 rounded-lg bg-blue-50 text-primary flex items-center justify-center"><span class="material-symbols-outlined text-[20px]">settings</span></span>
                  <div>
                    <h4 class="text-body-lg font-bold text-on-surface">Account Settings</h4>
                    <p class="text-label-md text-gray-400">Configure your role, regional, and language preferences.</p>
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div class="space-y-2">
                    <label class="text-on-surface font-bold text-label-md">Role</label>
                    <input type="text" value="<?= htmlspecialchars($user['role']) ?>" readonly
                      class="w-full bg-surface-container-high/60 border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md text-secondary cursor-not-allowed">
                  </div>
                  <div class="space-y-2">
                    <label class="text-on-surface font-bold text-label-md">VAT Number</label>
                    <input type="text" placeholder="Enter VAT Number"
                      class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                  </div>
                  <div class="space-y-2">
                    <label class="text-on-surface font-bold text-label-md">Timezone</label>
                    <select class="w-full js-select2" data-allow-clear="false">
                      <option value="Europe/Athens" selected>(GMT+02:00) Europe/Athens</option>
                      <option value="UTC">(GMT+00:00) UTC</option>
                      <option value="America/New_York">(GMT-05:00) America/New York</option>
                      <option value="Asia/Kolkata">(GMT+05:30) Asia/Kolkata</option>
                      <option value="Asia/Dubai">(GMT+04:00) Asia/Dubai</option>
                    </select>
                  </div>
                  <div class="space-y-2">
                    <label class="text-on-surface font-bold text-label-md">Language</label>
                    <select class="w-full js-select2" data-allow-clear="false">
                      <option value="el" selected>Greek</option>
                      <option value="en">English</option>
                      <option value="fr">French</option>
                      <option value="de">German</option>
                      <option value="es">Spanish</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex justify-end px-6 lg:px-8 py-5 border-t border-outline-variant/60 bg-surface-container-low/30">
              <button type="submit"
                class="inline-flex items-center gap-2 bg-[#198754] text-white px-8 py-3 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
                <span class="material-symbols-outlined text-[18px]">save</span>
                Submit
              </button>
            </div>
          </form>

          <!-- Change Password -->
          <form class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <div class="flex items-center gap-4 px-6 lg:px-8 py-5 border-b border-outline-variant/60">
              <div class="w-11 h-11 rounded-xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
                <span class="material-symbols-outlined text-[22px]">lock</span>
              </div>
              <div>
                <h3 class="text-headline-md font-bold text-on-surface">Change Password</h3>
                <p class="text-label-md text-gray-400">Update your account password</p>
              </div>
            </div>

            <div class="p-6 lg:p-8 space-y-5">
              <div class="space-y-2 md:max-w-[calc(50%-0.625rem)]">
                <label class="text-on-surface font-bold text-label-md">Current Password <span class="text-error">*</span></label>
                <div class="relative">
                  <input type="password" id="cur-pw" placeholder="Enter Current Password"
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pl-4 pr-12 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                  <button type="button" data-toggle-pw="cur-pw" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors">
                    <span class="material-symbols-outlined text-[20px]">visibility</span>
                  </button>
                </div>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="space-y-2">
                  <label class="text-on-surface font-bold text-label-md">New Password <span class="text-error">*</span></label>
                  <div class="relative">
                    <input type="password" id="new-pw" placeholder="Enter New Password"
                      class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pl-4 pr-12 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    <button type="button" data-toggle-pw="new-pw" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors">
                      <span class="material-symbols-outlined text-[20px]">visibility</span>
                    </button>
                  </div>
                </div>
                <div class="space-y-2">
                  <label class="text-on-surface font-bold text-label-md">Confirm New Password <span class="text-error">*</span></label>
                  <div class="relative">
                    <input type="password" id="conf-pw" placeholder="Confirm New Password"
                      class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pl-4 pr-12 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    <button type="button" data-toggle-pw="conf-pw" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors">
                      <span class="material-symbols-outlined text-[20px]">visibility</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex justify-end px-6 lg:px-8 py-5 border-t border-outline-variant/60 bg-surface-container-low/30">
              <button type="submit"
                class="inline-flex items-center gap-2 bg-[#198754] text-white px-8 py-3 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
                <span class="material-symbols-outlined text-[19px]">save</span>
                Update Password
              </button>
            </div>
          </form>

          <!-- Connected Accounts -->
          <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <div class="flex items-center gap-4 px-6 lg:px-8 py-5 border-b border-outline-variant/60">
              <div class="w-11 h-11 rounded-xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
                <span class="material-symbols-outlined text-[22px]">link</span>
              </div>
              <div>
                <h3 class="text-headline-md font-bold text-on-surface">Connected Accounts</h3>
                <p class="text-label-md text-gray-400">Link your accounts to sign in faster and access connected services.</p>
              </div>
            </div>

            <div class="p-6 lg:p-8 space-y-4">
              <!-- Google -->
              <div class="rounded-2xl border border-outline-variant p-5">
                <div class="flex items-start gap-3">
                  <span class="w-10 h-10 rounded-xl bg-white border border-outline-variant/60 flex items-center justify-center shrink-0 shadow-sm">
                    <svg viewBox="0 0 24 24" class="w-5 h-5">
                      <path fill="#4285F4" d="M23.49 12.27c0-.79-.07-1.54-.19-2.27H12v4.51h6.47a5.54 5.54 0 0 1-2.4 3.64v3h3.86c2.26-2.09 3.56-5.17 3.56-8.88z"/>
                      <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.86-3c-1.08.72-2.45 1.16-4.07 1.16-3.13 0-5.78-2.11-6.73-4.96H1.29v3.09A11.997 11.997 0 0 0 12 24z"/>
                      <path fill="#FBBC05" d="M5.27 14.29c-.25-.72-.38-1.49-.38-2.29s.14-1.57.38-2.29V6.62H1.29A11.997 11.997 0 0 0 0 12c0 1.94.46 3.77 1.29 5.38l3.98-3.09z"/>
                      <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.26 2.69 1.29 6.62l3.98 3.09C6.22 6.86 8.87 4.75 12 4.75z"/>
                    </svg>
                  </span>
                  <div class="flex-1 min-w-0">
                    <h4 class="text-body-lg font-bold text-on-surface">Google Account</h4>
                    <p class="text-label-md text-secondary">Connect your Google account once to sign in and access Google Console.</p>
                  </div>
                </div>
                <div class="mt-4 pt-4 border-t border-outline-variant/60 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                  <p class="flex items-center gap-1.5 text-label-md text-gray-400">
                    <span class="w-2 h-2 rounded-full bg-outline-variant"></span> Not connected yet. Connect to enable Google sign-in.
                  </p>
                  <button type="button" class="inline-flex items-center justify-center gap-2 bg-white border border-outline-variant text-on-surface font-bold text-label-md px-4 py-2.5 rounded-lg shadow-sm hover:bg-surface-container-low transition-all shrink-0">
                    <svg viewBox="0 0 24 24" class="w-4 h-4">
                      <path fill="#4285F4" d="M23.49 12.27c0-.79-.07-1.54-.19-2.27H12v4.51h6.47a5.54 5.54 0 0 1-2.4 3.64v3h3.86c2.26-2.09 3.56-5.17 3.56-8.88z"/>
                      <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.86-3c-1.08.72-2.45 1.16-4.07 1.16-3.13 0-5.78-2.11-6.73-4.96H1.29v3.09A11.997 11.997 0 0 0 12 24z"/>
                      <path fill="#FBBC05" d="M5.27 14.29c-.25-.72-.38-1.49-.38-2.29s.14-1.57.38-2.29V6.62H1.29A11.997 11.997 0 0 0 0 12c0 1.94.46 3.77 1.29 5.38l3.98-3.09z"/>
                      <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.26 2.69 1.29 6.62l3.98 3.09C6.22 6.86 8.87 4.75 12 4.75z"/>
                    </svg>
                    Connect with Google Console
                  </button>
                </div>
              </div>

              <!-- Microsoft -->
              <div class="rounded-2xl border border-outline-variant p-5">
                <div class="flex items-start gap-3">
                  <span class="w-10 h-10 rounded-xl bg-white border border-outline-variant/60 flex items-center justify-center shrink-0 shadow-sm">
                    <svg viewBox="0 0 24 24" class="w-5 h-5">
                      <path fill="#F25022" d="M1 1h10v10H1z"/>
                      <path fill="#7FBA00" d="M13 1h10v10H13z"/>
                      <path fill="#00A4EF" d="M1 13h10v10H1z"/>
                      <path fill="#FFB900" d="M13 13h10v10H13z"/>
                    </svg>
                  </span>
                  <div class="flex-1 min-w-0">
                    <h4 class="text-body-lg font-bold text-on-surface">Microsoft Account</h4>
                    <p class="text-label-md text-secondary">Connect your Microsoft account once to sign in to your dashboard.</p>
                  </div>
                </div>
                <div class="mt-4 pt-4 border-t border-outline-variant/60 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                  <p class="flex items-center gap-1.5 text-label-md text-gray-400">
                    <span class="w-2 h-2 rounded-full bg-outline-variant"></span> Not connected yet. Connect to enable Microsoft sign-in.
                  </p>
                  <button type="button" class="inline-flex items-center justify-center gap-2 bg-white border border-outline-variant text-on-surface font-bold text-label-md px-4 py-2.5 rounded-lg shadow-sm hover:bg-surface-container-low transition-all shrink-0">
                    <svg viewBox="0 0 24 24" class="w-4 h-4">
                      <path fill="#F25022" d="M1 1h10v10H1z"/>
                      <path fill="#7FBA00" d="M13 1h10v10H13z"/>
                      <path fill="#00A4EF" d="M1 13h10v10H1z"/>
                      <path fill="#FFB900" d="M13 13h10v10H13z"/>
                    </svg>
                    Connect with Microsoft
                  </button>
                </div>
              </div>
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
    (function () {
      document.querySelectorAll('[data-toggle-pw]').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var input = document.getElementById(btn.getAttribute('data-toggle-pw'));
          if (!input) return;
          var icon = btn.querySelector('.material-symbols-outlined');
          if (input.type === 'password') { input.type = 'text'; if (icon) icon.textContent = 'visibility_off'; }
          else { input.type = 'password'; if (icon) icon.textContent = 'visibility'; }
        });
      });
    })();
  </script>
</body>

</html>
