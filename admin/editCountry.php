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
      <div class="flex items-end justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> 
            <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray font-normal">Countries</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Edit</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Edit Country</h2>
        </div>
        <a href="countries.php" class="flex items-center gap-2 bg-white border border-outline-variant/50 text-on-surface px-6 py-2.5 rounded-lg text-[14px] hover:bg-surface-container-low transition-all font-bold shadow-sm">
          <span class="material-symbols-outlined text-[18px]">arrow_back</span>
          Back
        </a>
      </div>

      <!-- Edit Country Form -->
      <form class="w-full bg-white rounded-2xl border border-outline-variant/70 shadow-sm">
            <!-- Card Header -->
            <div class="flex items-center gap-4 p-6 border-b border-outline-variant/50">
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand-gradient text-on-primary shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-[26px]">public</span>
                </span>
                <div>
                    <h3 class="text-headline-md font-bold text-on-surface tracking-tight">Edit Country</h3>
                    <p class="text-body-md text-gray-400">Update the country details</p>
                </div>
            </div>

            <!-- Card Body -->
            <div class="p-6">
              <div class="space-y-2">
                 <label for="country_name" class="flex items-center text-on-surface font-semibold text-label-md">
                 Country Name: <span class="text-red-500 ml-0.5">*</span>
                 </label>
                 <input type="text" id="country_name" name="country_name" placeholder="e.g. Greece" required autofocus value="Afghanistan"
                 class="w-full md:w-1/2 bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md text-on-surface placeholder:text-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
             </div>
             
 
             <!-- Action -->
             <div class="flex justify-center pt-6 mt-6 border-t border-outline-variant/40">
               <button type="submit"
                 class="flex items-center gap-2 bg-[#198754] text-white px-7 py-2.5 rounded-lg text-[14px] font-bold shadow-lg shadow-[#198754]/20 hover:opacity-95 active:scale-[0.98] transition-all">
                 <span class="material-symbols-outlined text-[20px]">save</span>
                 Submit
               </button>
             </div>
           </div>
      </form>
    </section>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>
 
</html>