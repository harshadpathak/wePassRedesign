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
    <section class="p-margin-desktop space-y-stack-lg pb-16">
      <!-- Breadcrumbs and Header -->
      <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray font-normal">Campaigns</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Campaigns</h2>
        </div>
        <div class="flex items-center gap-3">
          <a href="createCampaign.php"
            class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined text-sm">add</span>
            Create Campaign
          </a>
        </div>
      </div>

      <!-- Main Card -->
      <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
        <!-- Toolbar: Legend / Filter chips -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-end gap-x-8 gap-y-3 px-6 py-4 bg-surface-container-low/40 border-b border-outline-variant">
          <div class="flex items-center gap-3 flex-wrap">
            <span class="text-label-sm text-outline uppercase tracking-widest">Status</span>
            <span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-amber-50 text-amber-700 border border-amber-100 whitespace-nowrap"><span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>Pending</span>
            <span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Running</span>
            <span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-indigo-50 text-indigo-700 border border-indigo-100 whitespace-nowrap"><span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>Completed</span>
          </div>
          <div class="flex items-center gap-3 flex-wrap">
            <span class="text-label-sm text-outline uppercase tracking-widest">Active</span>
            <span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-emerald-50 text-emerald-700 border border-emerald-100 whitespace-nowrap"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Active</span>
            <span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-[10px] font-bold uppercase bg-rose-50 text-rose-700 border border-rose-100 whitespace-nowrap"><span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>Inactive</span>
          </div>
        </div>

        <!-- Table -->
        <table class="w-full text-left border-collapse responsive-table">
          <thead class="bg-surface-container-low/50">
            <tr>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Title</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Template</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Stores</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Created</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Status</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant">Active</th>
              <th class="px-6 py-4 text-label-sm text-outline uppercase tracking-widest border-b border-outline-variant text-right">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Empty State Row -->
            <tr>
              <td colspan="7" class="cell-empty px-6 py-16">
                <div class="flex flex-col items-center justify-center text-center max-w-md mx-auto">
                  <div class="relative mb-5">
                    <div class="absolute inset-0 bg-primary/10 rounded-full blur-xl"></div>
                    <div class="w-12 h-12 rounded-2xl bg-brand-gradient text-white flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
                      <span class="material-symbols-outlined text-[26px]">campaign</span>
                    </div>
                  </div>
                  <h3 class="font-display text-headline-md font-bold text-on-surface">No campaigns yet</h3>
                  <p class="text-body-md text-gray-400 mt-2 mb-6">Launch your first campaign to start engaging your audience and growing your reach.</p>
                  <a href="createCampaign.php"
                    class="flex items-center gap-2 bg-brand-gradient text-on-primary px-4 py-2.5 rounded-lg text-[14px] shadow-lg shadow-primary/20 hover:shadow-xl hover:opacity-90 active:scale-[0.98] transition-all font-bold">
                    <span class="material-symbols-outlined text-sm">add</span>
                    Create your first campaign
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>
