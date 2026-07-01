<!DOCTYPE html>
<html class="light" lang="en">
 
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
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Edit User</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Edit User</h2>
        </div>
        <a href="accountUsers.php"
          class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>
        <!-- Information Banner -->
        <div class="bg-white border border-outline-variant rounded-2xl p-6 flex flex-col gap-4">
            <div class="flex gap-6 items-start">
                <div
                    class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
                    <span class="material-symbols-outlined text-[28px]">info</span>
                </div>
                <div class="flex-1">
                    <h3 class="text-headline-md font-bold text-on-surface tracking-tight">Edit User Details</h3>
                    <p class="text-body-md text-gray-400 leading-relaxed">Modify user details such as name, email, role, or status. You can also reset the user's password. All changes will take effect immediately after saving.</p>
                    <!-- Steps -->
                    <div class="bg-primary/5 rounded-2xl mt-4 p-2 flex flex-wrap items-center gap-3">
                        <!-- Step 1 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Update Details</span>
                        </div>
                        <!-- Step 2 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Change Role</span>
                        </div>
                        <!-- Step 3 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Reset Password</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit User Form -->
        <form class="bg-white rounded-2xl border border-outline-variant/70 shadow-sm overflow-hidden p-6 sm:p-8 flex flex-col h-full">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-6">
                <!-- Name -->
                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Name: <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="text" value="Jenil Vora" placeholder="Enter name" required
                            class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                </div>
                <!-- Email -->
                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Email: <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="email" value="womaludy@mailinator.com" placeholder="Enter email" required
                            class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                </div>
                <!-- Role -->
                <div class="space-y-2">
                    <label class="flex items-center text-on-surface font-semibold text-label-md">
                        Role: <span class="text-red-500">*</span>
                    </label>
                    <select class="w-full js-select2" data-placeholder="Select Role" data-allow-clear="false">
                        <option value="manager" selected>Manager</option>
                        <option value="viewer">Read Only</option>
                    </select>
                </div>
                <!-- Status -->
                <div class="space-y-2">
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
                    </div>
                </div>
                <!-- Password -->
                <div class="space-y-2">
                    <label class="flex items-center gap-1 text-on-surface font-semibold text-label-md">
                        Password:
                    </label>
                    <div class="relative">
                        <input type="password" id="password" placeholder="Enter a New Password"
                            class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <button type="button" data-toggle-password="password"
                            class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                    </div>
                </div>
                <!-- Confirm Password -->
                <div class="space-y-2">
                    <label class="flex items-center gap-1 text-on-surface font-semibold text-label-md">
                        Confirm Password:
                    </label>
                    <div class="relative">
                        <input type="password" id="confirm_password" placeholder="Enter a New Confirm Password"
                            class="w-full bg-surface-container-low border-outline-variant placeholder:text-slate-400 rounded-lg py-3 px-4 text-body-md font-body-md placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <button type="button" data-toggle-password="confirm_password"
                            class="material-symbols-outlined text-[20px] text-outline absolute right-3.5 top-1/2 -translate-y-1/2 hover:text-on-surface transition-colors cursor-pointer">visibility</button>
                    </div>
                </div>
            </div>

            <!-- Card Footer -->
            <div class="flex justify-center mt-8 pt-6 border-t border-outline-variant/30">
                <button type="submit"
                class="flex items-center gap-2 bg-[#198754] text-white px-7 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
                <span class="material-symbols-outlined text-[19px]">save</span>
                Update
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