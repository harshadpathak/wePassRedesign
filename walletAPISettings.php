<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Wallet API Settings</title>
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
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div class="space-y-1">
          <nav class="flex items-center gap-2 text-label-sm text-outline mb-1">
            <span class="material-symbols-outlined text-[14px] text-gray">home</span> <span class="text-gray font-normal">Dashboard</span>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-gray-500 font-normal">Wallet API Settings</span>
          </nav>
          <h2 class="font-display tracking-tight text-headline-lg font-bold">Wallet API Settings</h2>
        </div>
      </div>

      <!-- Wallet settings grid -->
      <div class="grid grid-cols-1 xl:grid-cols-2 gap-stack-lg items-start">

        <!-- ============ GOOGLE WALLET ============ -->
        <form class="js-wallet bg-white rounded-2xl border border-outline-variant shadow-sm flex flex-col">
          <!-- Card header -->
          <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/70">
            <span class="w-11 h-11 rounded-xl bg-surface-container-low border border-outline-variant/70 flex items-center justify-center shrink-0">
                <svg viewBox="0 0 24 24" class="w-6 h-6">
                    <rect x="2.5"   y="2"   width="19" height="20"   rx="2.5" fill="#34A853"/>
                    <rect x="2.5"   y="4"   width="19" height="18"   rx="2.5" fill="#FBBC05"/>
                    <rect x="2.5" y="6.5" width="19" height="15.5" rx="2.5" fill="#EA4335"/>
                    <path d="M2 12.2 C 5.5 10.2 8.5 13.8 12 14 C 15.5 14.2 18.5 10.5 22 10.8 L 22 19.5 Q 22 22 19.5 22 L 4.5 22 Q 2 22 2 19.5 Z" fill="#4285F4"/>
                </svg>
            </span>
            <div class="flex-1 min-w-0">
              <h3 class="text-headline-md font-bold text-on-surface leading-tight">Google Wallet</h3>
              <p class="text-label-md text-gray-400 mt-0.5">API configuration</p>
            </div>
            <span class="js-status inline-flex items-center gap-1.5 rounded-full bg-emerald-50 border border-emerald-200/70 px-2.5 py-1 text-label-sm font-bold text-emerald-700 shrink-0">
              <span class="js-status-dot w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
              <span class="js-status-text">Default</span>
            </span>
          </div>

          <!-- Options -->
          <div class="p-6 space-y-4 flex-1">
            <!-- <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Configuration mode</p> -->
            <!-- Default -->
            <label class="js-option relative block cursor-pointer rounded-xl border-2 border-outline-variant p-5 pr-12 transition-all duration-200 hover:border-primary/50 hover:shadow-sm has-[:checked]:border-primary has-[:checked]:bg-primary/[0.04] has-[:checked]:shadow-sm">
              <input type="radio" name="google_mode" value="default" class="peer sr-only" checked>
              <span class="check-badge absolute top-4 right-4 w-7 h-7 rounded-full bg-primary flex items-center justify-center shadow-sm transition-all opacity-0 scale-75 peer-checked:opacity-100 peer-checked:scale-100">
                <span class="material-symbols-outlined text-[18px] text-white">check</span>
              </span>
              <div class="flex items-center gap-2 mb-3">
                <span class="material-symbols-outlined text-[20px] text-primary">bolt</span>
                <span class="text-body-lg font-bold text-on-surface">Default API Configuration</span>
                <span class="text-label-sm font-bold text-emerald-700 bg-emerald-50 border border-emerald-200/70 px-2 py-0.5 rounded-full">Recommended</span>
              </div>
              <ul class="space-y-2 text-body-md text-secondary">
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">check_circle</span>Uses the system's default Issuer ID and configuration file</li>
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">check_circle</span>Securely connects with the Google Wallet pass distribution service</li>
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">check_circle</span>No manual setup required — works out of the box</li>
              </ul>
            </label>

            <!-- Custom -->
            <label class="js-option relative block cursor-pointer rounded-xl border-2 border-outline-variant p-5 pr-12 transition-all duration-200 hover:border-primary/50 hover:shadow-sm has-[:checked]:border-primary has-[:checked]:bg-primary/[0.04] has-[:checked]:shadow-sm">
              <input type="radio" name="google_mode" value="custom" class="peer sr-only">
              <span class="check-badge absolute top-4 right-4 w-7 h-7 rounded-full bg-primary flex items-center justify-center shadow-sm transition-all opacity-0 scale-75 peer-checked:opacity-100 peer-checked:scale-100">
                <span class="material-symbols-outlined text-[18px] text-white">check</span>
              </span>
              <div class="flex items-center gap-2 mb-3">
                <span class="material-symbols-outlined text-[20px] text-primary">tune</span>
                <span class="text-body-lg font-bold text-on-surface">Custom Own API Configuration</span>
              </div>
              <ul class="space-y-2 text-body-md text-secondary">
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">arrow_circle_right</span>Provide your own Issuer ID and configuration file</li>
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">arrow_circle_right</span>Securely connect your system with the WePass platform</li>
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">arrow_circle_right</span>Full control over your Google Wallet pass integration</li>
              </ul>
            </label>

            <!-- Custom fields (revealed when Custom is selected) -->
            <div class="js-custom-panel hidden rounded-xl border border-outline-variant hover:border-primary/50 p-5 space-y-5">
              <!-- Issuer ID -->
              <div class="space-y-1.5">
                <label class="block text-label-md font-semibold text-on-surface">Issuer ID:<span class="text-error">*</span></label>
                <input type="text" placeholder="Enter Issuer ID" required
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                <!-- What is Issuer ID? -->
                <div class="mt-2 py-4 space-y-2">
                  <p class="flex items-center gap-2 text-label-md font-bold text-gray-400">
                    <span class="material-symbols-outlined text-[18px] text-gray-400">info</span>What is Issuer ID?
                  </p>
                  <p class="text-label-md text-gray-400">Your unique Issuer ID provided by Google Pay for Passes. This identifies your organization in the Google Wallet ecosystem.</p>
                  <p class="text-label-md text-gray-400"><span class="font-bold text-gray-400">How to get:</span> Visit <a href="https://pay.google.com/business/console" target="_blank" rel="noopener" class="font-semibold underline underline-offset-2 text-primary/70 hover:text-primary hover:underline">Google Pay Business Console</a> → Navigate to "Issuer Settings" → Copy your Issuer ID</p>
                </div>
              </div>

              <!-- Configuration File (JSON) -->
              <div class="space-y-1.5">
                <label class="block text-label-md font-semibold text-on-surface">Configuration File (JSON):<span class="text-error">*</span></label>
                <label class="flex items-center gap-3 rounded-lg border border-dashed border-outline-variant bg-white px-4 py-3 cursor-pointer hover:border-primary hover:bg-primary/[0.03] transition-all">
                  <span class="material-symbols-outlined text-primary">upload_file</span>
                  <div class="flex-1 min-w-0">
                    <p class="text-label-md font-bold text-on-surface">Upload service account JSON</p>
                    <p class="text-label-sm text-outline">JSON file · max 2 MB</p>
                  </div>
                  <span class="text-label-sm font-bold text-primary bg-primary/10 px-3 py-1.5 rounded-lg shrink-0">Browse</span>
                  <input type="file" accept=".json" required class="sr-only">
                </label>
                <!-- What is Configuration File? -->
                <div class="mt-2 py-4 space-y-2">
                  <p class="flex items-center gap-2 text-label-md font-bold text-gray-400">
                    <span class="material-symbols-outlined text-[18px] text-gray-400">info</span>What is Configuration File?
                  </p>
                  <p class="text-label-md text-gray-400">A JSON service account key file that contains credentials for authenticating API requests to Google Wallet.</p>
                  <p class="text-body-md font-semibold text-gray-400">How to get:</p>
                  <ol class="list-decimal list-inside space-y-1 text-label-md text-gray-400">
                    <li>Go to <a href="https://console.cloud.google.com" target="_blank" rel="noopener" class="text-primary font-semibold underline underline-offset-2 hover:opacity-80">Google Cloud Console</a></li>
                    <li>Select your project → IAM &amp; Admin → Service Accounts</li>
                    <li>Create/Select a service account → Keys → Add Key → Create new key</li>
                    <li>Choose JSON format and download the file</li>
                    <li>Upload the downloaded JSON file here</li>
                  </ol>
                  <p class="flex items-start gap-2 rounded-lg bg-amber-50 border border-amber-200 px-3 py-2 text-label-md text-amber-700">
                    <span class="material-symbols-outlined text-[14px] shrink-0">warning</span>
                    <span><span class="font-bold">Security Note:</span> Keep this file secure and never share it publicly.</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Footer / Submit -->
          <div class="flex items-center gap-3 px-6 py-4 border-t border-outline-variant/70 bg-surface-container-low/40">
            <p class="flex items-center gap-1.5 text-label-md text-gray-400 flex-1 min-w-0">
              <span class="material-symbols-outlined text-[18px] text-primary shrink-0">lock</span>
              Credentials are encrypted at rest
            </p>
            <button type="submit"
              class="inline-flex items-center gap-2 bg-[#198754] text-white px-5 py-2.5 rounded-lg text-label-md font-bold shadow-md shadow-primary/20 hover:opacity-95 active:scale-[0.98] transition-all shrink-0">
              <span class="material-symbols-outlined text-[20px]">save</span>
              Save Configuration
            </button>
          </div>
        </form>

        <!-- ============ APPLE WALLET ============ -->
        <form class="js-wallet bg-white rounded-2xl border border-outline-variant shadow-sm flex flex-col">
          <!-- Card header -->
          <div class="flex items-center gap-3 px-6 py-5 border-b border-outline-variant/70">
            <span class="w-11 h-11 rounded-xl bg-surface-container-low border border-outline-variant/70 flex items-center justify-center text-on-surface shrink-0">
              <svg viewBox="0 0 384 512" class="w-5 h-5 fill-current">
                <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
              </svg>
            </span>
            <div class="flex-1 min-w-0">
              <h3 class="text-headline-md font-bold text-on-surface leading-tight">Apple Wallet</h3>
              <p class="text-label-md text-gray-400 mt-0.5">API configuration</p>
            </div>
            <span class="js-status inline-flex items-center gap-1.5 rounded-full bg-emerald-50 border border-emerald-200/70 px-2.5 py-1 text-label-sm font-bold text-emerald-700 shrink-0">
              <span class="js-status-dot w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
              <span class="js-status-text">Default</span>
            </span>
          </div>

          <!-- Options -->
          <div class="p-6 space-y-4 flex-1">
            <!-- <p class="text-label-sm font-bold uppercase tracking-wider text-outline">Configuration mode</p> -->
            <!-- Default -->
            <label class="js-option relative block cursor-pointer rounded-xl border-2 border-outline-variant p-5 pr-12 transition-all duration-200 hover:border-primary/50 hover:shadow-sm has-[:checked]:border-primary has-[:checked]:bg-primary/[0.04] has-[:checked]:shadow-sm">
              <input type="radio" name="apple_mode" value="default" class="peer sr-only" checked>
              <span class="check-badge absolute top-4 right-4 w-7 h-7 rounded-full bg-primary flex items-center justify-center shadow-sm transition-all opacity-0 scale-75 peer-checked:opacity-100 peer-checked:scale-100">
                <span class="material-symbols-outlined text-[18px] text-white">check</span>
              </span>
              <div class="flex items-center gap-2 mb-3">
                <span class="material-symbols-outlined text-[20px] text-primary">bolt</span>
                <span class="text-body-lg font-bold text-on-surface">Default API Configuration</span>
                <span class="text-label-sm font-bold text-emerald-700 bg-emerald-50 border border-emerald-200/70 px-2 py-0.5 rounded-full">Recommended</span>
              </div>
              <ul class="space-y-2 text-body-md text-secondary">
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">check_circle</span>Uses default Apple Wallet credentials for secure pass generation.</li>
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">check_circle</span>Automatically issues digital passes for Apple Wallet</li>
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">check_circle</span>No manual setup required — works out of the box</li>
              </ul>
            </label>

            <!-- Custom -->
            <label class="js-option relative block cursor-pointer rounded-xl border-2 border-outline-variant p-5 pr-12 transition-all duration-200 hover:border-primary/50 hover:shadow-sm has-[:checked]:border-primary has-[:checked]:bg-primary/[0.04] has-[:checked]:shadow-sm">
              <input type="radio" name="apple_mode" value="custom" class="peer sr-only">
              <span class="check-badge absolute top-4 right-4 w-7 h-7 rounded-full bg-primary flex items-center justify-center shadow-sm transition-all opacity-0 scale-75 peer-checked:opacity-100 peer-checked:scale-100">
                <span class="material-symbols-outlined text-[18px] text-white">check</span>
              </span>
              <div class="flex items-center gap-2 mb-3">
                <span class="material-symbols-outlined text-[20px] text-primary">tune</span>
                <span class="text-body-lg font-bold text-on-surface">Custom Own API Configuration</span>
              </div>
              <ul class="space-y-2 text-body-md text-secondary">
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">arrow_circle_right</span>Enter your Team ID, Pass Type ID, and Certificate Password</li>
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">arrow_circle_right</span>Upload your Apple Certificate and WWDR Certificate</li>
                <li class="flex gap-2.5 text-gray-400"><span class="material-symbols-outlined text-[18px] text-gray-400 shrink-0 mt-0.5">arrow_circle_right</span>Enables secure, custom pass generation for Apple Wallet</li>
              </ul>
            </label>

            <!-- Custom fields (revealed when Custom is selected) -->
            <div class="js-custom-panel hidden rounded-xl border border-outline-variant hover:border-primary/50 p-5 space-y-5">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Organization Name -->
                <div class="space-y-1.5">
                  <label class="block text-label-md font-semibold text-on-surface">Organization Name:<span class="text-error">*</span></label>
                  <input type="text" placeholder="Enter Organization Name" required
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                  <p class="flex items-center gap-1.5 text-label-sm font-normal text-gray-400">
                    <span class="material-symbols-outlined text-[15px]">info</span>Your company's legal name from Apple Developer account
                  </p>
                </div>
                <!-- Team Identifier -->
                <div class="space-y-1.5">
                  <label class="block text-label-md font-semibold text-on-surface">Team Identifier:<span class="text-error">*</span></label>
                  <input type="text" placeholder="Enter Team Identifier" required
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                  <p class="flex items-center gap-1.5 text-label-sm font-normal text-gray-400">
                    <span class="material-symbols-outlined text-[15px]">info</span>10-character ID from Apple Developer → Membership
                  </p>
                </div>
              </div>

              <!-- Certificate Password -->
              <div class="space-y-1.5">
                <label class="block text-label-md font-semibold text-on-surface">Certificate Password:<span class="text-error">*</span></label>
                <input type="password" placeholder="Enter certificate password" required
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                <p class="flex items-center gap-1.5 text-label-sm font-normal text-gray-400">
                  <span class="material-symbols-outlined text-[15px]">info</span>Password set when exporting certificate from Keychain Access
                </p>
              </div>

              <!-- Pass Type Identifier -->
              <div class="space-y-1.5">
                <label class="block text-label-md font-semibold text-on-surface">Pass Type Identifier:<span class="text-error">*</span></label>
                <input type="text" placeholder="pass.com.yourcompany.passname" required
                  class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                <div class="mt-2 py-4 space-y-1.5">
                  <p class="text-label-md text-gray-400"><span class="font-semibold text-gray-400">How to get:</span> Apple Developer → Certificates, IDs &amp; Profiles → Identifiers → Pass Type IDs</p>
                  <p class="text-label-md text-on-surface-variant"><span class="font-semibold text-gray-400">Format:</span> <code class="rounded bg-primary/10 px-1.5 py-0.5 text-label-sm font-mono text-primary">pass.com.yourcompany.passname</code></p>
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Apple Certificate -->
                <div class="space-y-1.5">
                  <label class="block text-label-md font-semibold text-on-surface">Apple Certificate:<span class="text-error">*</span></label>
                  <label class="flex items-center gap-3 rounded-lg border border-dashed border-outline-variant bg-white px-4 py-3 cursor-pointer hover:border-primary hover:bg-primary/[0.03] transition-all">
                    <span class="material-symbols-outlined text-primary">upload_file</span>
                    <div class="flex-1 min-w-0">
                      <p class="text-label-md font-bold text-on-surface truncate">.p12 file</p>
                      <p class="text-label-sm text-outline">max 2 MB</p>
                    </div>
                    <span class="text-label-sm font-bold text-primary bg-primary/10 px-3 py-1.5 rounded-lg shrink-0">Browse</span>
                    <input type="file" accept=".p12" required class="sr-only">
                  </label>
                  <p class="flex items-center gap-1.5 text-label-sm text-gray-400">
                    <span class="material-symbols-outlined text-[15px]">description</span>Pass Type ID certificate (.p12 file)
                  </p>
                </div>
                <!-- WWDR Certificate -->
                <div class="space-y-1.5">
                  <label class="block text-label-md font-semibold text-on-surface">WWDR Certificate: <span class="text-error">*</span></label>
                  <label class="flex items-center gap-3 rounded-lg border border-dashed border-outline-variant bg-white px-4 py-3 cursor-pointer hover:border-primary hover:bg-primary/[0.03] transition-all">
                    <span class="material-symbols-outlined text-primary">upload_file</span>
                    <div class="flex-1 min-w-0">
                      <p class="text-label-md font-bold text-on-surface truncate">.pem file</p>
                      <p class="text-label-sm text-outline">max 2 MB</p>
                    </div>
                    <span class="text-label-sm font-bold text-primary bg-primary/10 px-3 py-1.5 rounded-lg shrink-0">Browse</span>
                    <input type="file" accept=".pem" required class="sr-only">
                  </label>
                  <p class="flex items-center gap-1.5 text-label-sm text-gray-400">
                    <span class="material-symbols-outlined text-[15px]">description</span>Apple WWDR certificate (.pem file)
                  </p>
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Auth Key ID -->
                <div class="space-y-1.5">
                  <label class="block text-label-md font-semibold text-on-surface">Auth Key ID: <span class="text-error">*</span></label>
                  <input type="text" placeholder="Enter Auth Key ID" required
                    class="w-full bg-surface-container-low border-outline-variant rounded-lg py-3 px-4 text-body-md font-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                  <p class="flex items-center gap-1.5 text-label-sm text-gray-400">
                    <span class="material-symbols-outlined text-[15px]">info</span>10-character Key ID from Apple Developer → Keys
                  </p>
                </div>
                <!-- Auth Key File -->
                <div class="space-y-1.5">
                  <label class="block text-label-md font-semibold text-on-surface">Auth Key File: <span class="text-error">*</span></label>
                  <label class="flex items-center gap-3 rounded-lg border border-dashed border-outline-variant bg-white px-4 py-3 cursor-pointer hover:border-primary hover:bg-primary/[0.03] transition-all">
                    <span class="material-symbols-outlined text-primary">upload_file</span>
                    <div class="flex-1 min-w-0">
                      <p class="text-label-md font-bold text-on-surface truncate">.p8 file</p>
                      <p class="text-label-sm text-outline">max 2 MB</p>
                    </div>
                    <span class="text-label-sm font-bold text-primary bg-primary/10 px-3 py-1.5 rounded-lg shrink-0">Browse</span>
                    <input type="file" accept=".p8" required class="sr-only">
                  </label>
                  <p class="flex items-center gap-1.5 text-label-sm text-gray-400">
                    <span class="material-symbols-outlined text-[15px]">description</span>APNs auth key (.p8 file) — download once from Apple Developer
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Footer / Submit -->
          <div class="flex items-center gap-3 px-6 py-4 border-t border-outline-variant/70 bg-surface-container-low/40">
            <p class="flex items-center gap-1.5 text-label-md text-gray-400 flex-1 min-w-0">
              <span class="material-symbols-outlined text-[18px] text-primary shrink-0">lock</span>
              Credentials are encrypted at rest
            </p>
            <button type="submit"
              class="inline-flex items-center gap-2 bg-[#198754] text-white px-5 py-2.5 rounded-lg text-label-md font-bold shadow-md shadow-primary/20 hover:opacity-95 active:scale-[0.98] transition-all shrink-0">
              <span class="material-symbols-outlined text-[20px]">save</span>
              Save Configuration
            </button>
          </div>
        </form>

      </div>
    </section>

    <!-- Reveal custom-config fields when "Custom" mode is selected -->
    <script>
      document.querySelectorAll('.js-wallet').forEach(function (form) {
        var panel = form.querySelector('.js-custom-panel');
        var badge = form.querySelector('.js-status');
        var badgeText = form.querySelector('.js-status-text');
        var badgeDot = form.querySelector('.js-status-dot');
        function sync() {
          var checked = form.querySelector('input[type=radio]:checked');
          var isCustom = checked && checked.value === 'custom';
          if (panel) panel.classList.toggle('hidden', !isCustom);
          if (badgeText) badgeText.textContent = isCustom ? 'Custom' : 'Default';
          if (badge) {
            badge.classList.toggle('bg-emerald-50', !isCustom);
            badge.classList.toggle('border-emerald-200/70', !isCustom);
            badge.classList.toggle('text-emerald-700', !isCustom);
            badge.classList.toggle('bg-primary/10', isCustom);
            badge.classList.toggle('border-primary/20', isCustom);
            badge.classList.toggle('text-primary', isCustom);
          }
          if (badgeDot) {
            badgeDot.classList.toggle('bg-emerald-500', !isCustom);
            badgeDot.classList.toggle('bg-primary', isCustom);
          }
        }
        form.querySelectorAll('input[type=radio]').forEach(function (r) {
          r.addEventListener('change', sync);
        });
        sync();
      });
    </script>
    <?php include('footer.php'); ?>
  </main>
  <!-- Micro-interaction Scripts -->
   <?php include('script.php'); ?>
</body>

</html>
