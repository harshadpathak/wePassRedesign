<!DOCTYPE html>
<html class="light" lang="en">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Create User</title>
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
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray font-normal">Account Users</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">User Create</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">User Create</h2>
        </div>
        <a href="users.php"
          class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>

        <!-- User Details Form -->
        <form class="bg-white rounded-2xl border border-outline-variant/70 shadow-sm overflow-hidden p-6 flex flex-col h-full">
            <!-- Info note -->
            <div class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-indigo-50/40 border border-primary/15 rounded-xl p-4">
                <div class="w-9 h-9 rounded-lg bg-primary text-white flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[20px]">info</span>
                </div>
                <p class="text-body-md text-gray-500 leading-relaxed self-center">This action will automatically create a <span class="text-gray-500 font-bold">Company Owner</span> or <span class="text-gray-500 font-bold">Agent Owner</span> user, along with a linked <span class="text-gray-500 font-bold">Company</span> or <span class="text-gray-500 font-bold">Agent</span> profile. The account will be activated immediately and assigned the default subscription plan.</p>
            </div>
            
            <!-- Card Body -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-5 mt-6">
                <!-- User Type -->
                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">
                        User Type: <span class="text-red-500 ml-0.5">*</span>
                    </label>
                    <select class="w-full js-select2" data-placeholder="Select user type" data-allow-clear="false" required>
                        <option value=""></option>
                        <option value="company">Company</option>
                        <option value="agent">Agent</option>
                    </select>
                    <p class="text-label-md text-gray-400">Choose whether to create a Company or an Agent</p>
                </div>
                <!-- Owner Name -->
                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Owner Name: <span class="text-red-500 ml-0.5">*</span>
                    </label>
                    <input type="text" placeholder="e.g. John Doe" required
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    <p class="text-label-md text-gray-400">Full name of the company owner</p>
                </div>
                <!-- Email Address -->
                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Email Address: <span class="text-red-500 ml-0.5">*</span>
                    </label>
                    <input type="email" placeholder="e.g. john@company.com" required
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    <p class="text-label-md text-gray-400">Must be unique &mdash; used for login</p>
                </div>
                <!-- Company / Business Name -->
                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Company/Business Name: <span class="text-red-500 ml-0.5">*</span>
                    </label>
                    <input type="text" placeholder="e.g. Acme Corp" required
                        class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    <p class="text-label-md text-gray-400">Select a User Type to see what to enter here</p>
                </div>
                <!-- Password -->
                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Password: <span class="text-red-500 ml-0.5">*</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="password" placeholder="Enter password" required minlength="8"
                            class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <button type="button" data-toggle-password="password"
                            class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                    </div>
                    <p class="text-label-md text-gray-400">Minimum 8 characters</p>
                </div>
                <!-- Confirm Password -->
                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Confirm Password: <span class="text-red-500 ml-0.5">*</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="confirm_password" placeholder="Re-enter password" required minlength="8"
                            class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <button type="button" data-toggle-password="confirm_password"
                            class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                    </div>
                    <p class="text-label-md text-gray-400">Must match the password above</p>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex justify-center mt-8 pt-6 border-t border-outline-variant/30">
                <button type="submit"
                    class="flex items-center gap-2 bg-[#198754] text-white px-8 py-3 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
                    <span class="material-symbols-outlined">save</span>
                    Submit
                </button>
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