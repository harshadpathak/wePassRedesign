<!DOCTYPE html>
<html class="light" lang="en">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Invite Company</title>
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
            <span class="text-gray font-normal"> Companies Users</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Invite Company</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Invite Company</h2>
        </div>
        <a href="company.php"
          class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
          <span class="material-symbols-outlined text-[19px]">arrow_back</span>
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
                    <h3 class="text-headline-md font-bold text-on-surface tracking-tight">Invite a Company via Email</h3>
                    <p class="text-body-md text-secondary text-gray-400 leading-relaxed">Send an invitation email to a company representative. They will receive a registration link to set up their own account and password. The invitation will remain in a pending state until the company completes the registration process.</p>
                    <div class="bg-primary/5 rounded-2xl p-3 flex flex-wrap items-center gap-3 mt-4">
                        <!-- Step 1 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px] font-variation-fill">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Enter Company Info</span>
                        </div>
                        <!-- Step 2 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px] font-variation-fill">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Send Invitation Email</span>
                        </div>
                        <!-- Step 3 -->
                        <div
                            class="flex items-center gap-2.5 bg-white rounded-full pl-2.5 pr-5 py-2 shadow-sm border border-outline-variant/40 transition-transform">
                            <span class="material-symbols-outlined text-emerald-500 text-[22px] font-variation-fill">check_circle</span>
                            <span class="text-body-md font-bold text-gray-600">Company Registers</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Steps -->
        </div>

        <!-- User Details Form -->
        <form class="bg-white rounded-2xl border border-outline-variant/70 shadow-sm overflow-hidden p-6 flex flex-col h-full">

            <!-- Card Body -->
            <!-- <div class=" sm:p-8"> -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div class="space-y-2">
                        <label class="flex items-center text-on-surface font-semibold text-label-md">
                            Company Name: <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input type="text" placeholder="Enter Company Name" required
                                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pr-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="space-y-2">
                        <label class="flex items-center text-on-surface font-semibold text-label-md">
                            Name: <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input type="text" placeholder="Enter Name" required
                                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pr-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                    </div>
                    <!-- Role -->
                    <div class="space-y-2">
                        <label class="flex items-center text-on-surface font-semibold text-label-md">
                            Email: <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input type="email" placeholder="Enter email" required
                                class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 pr-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                    </div>
                </div>
            <!-- </div> -->

            <!-- Card Footer -->
            <div class="flex items-center justify-center gap-3 mt-6 pt-6 border-t border-outline-variant/40 bg-white">
                <button type="submit"
                    class="flex items-center gap-2 bg-[#198754] text-white px-8 py-3 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
                    <span class="material-symbols-outlined text-[20px]">send</span>
                    Send Invitation
                </button>
            </div>
        </form>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>
 
</html>