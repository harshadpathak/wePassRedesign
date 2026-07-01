<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Sign in</title>
  <?php include('head.php'); ?>
</head>

<body class="bg-background text-on-surface selection:bg-primary-container/20 selection:text-primary">
  <main class="min-h-screen grid grid-cols-1 lg:grid-cols-2">
    <!-- ============ LEFT: Hero ============ -->
    <section class="relative hidden lg:flex flex-col justify-between overflow-hidden p-10 xl:p-14
      bg-gradient-to-br from-indigo-50 via-blue-50 to-surface">
      <!-- soft glow blobs -->
      <span class="pointer-events-none absolute -top-24 -left-24 w-96 h-96 rounded-full bg-primary/10 blur-3xl"></span>
      <span class="pointer-events-none absolute bottom-0 right-0 w-96 h-96 rounded-full bg-emerald-200/30 blur-3xl"></span>

      <!-- Brand -->
      <div class="relative">
        <div class="flex items-center gap-2.5">
          <img src="https://drojrh3mlpzqs.cloudfront.net/9eda0c24-7ef8-4597-8d97-91cfa2d4d7d8/adminTheme/assets/images/logo-new.png"
            alt="WePass" class="h-9 w-auto object-contain">
        </div>
        <p class="text-label-md text-secondary mt-1.5 ml-0.5">Enterprise Digital Wallet Platform</p>
      </div>

      <!-- Center content -->
      <div class="relative my-8">
        <!-- Fanned wallet cards -->
        <div class="relative h-80 mb-16">
          <?php
            $cards = [
              ['bg' => 'bg-gradient-to-br from-rose-500 to-rose-700',     'rot' => '-rotate-[14deg]', 'x' => 'left-0',    'y' => 'top-6',  'z' => 'z-10'],
              ['bg' => 'bg-gradient-to-br from-amber-600 to-amber-800',   'rot' => '-rotate-[8deg]',  'x' => 'left-24',   'y' => 'top-3',  'z' => 'z-20'],
              ['bg' => 'bg-gradient-to-br from-indigo-600 to-indigo-800', 'rot' => '-rotate-[2deg]',  'x' => 'left-48',   'y' => 'top-1',  'z' => 'z-30'],
              ['bg' => 'bg-gradient-to-br from-sky-500 to-cyan-600',      'rot' => 'rotate-[5deg]',   'x' => 'left-72',   'y' => 'top-0',  'z' => 'z-40', 'front' => true],
            ];
            foreach ($cards as $i => $card):
          ?>
          <div class="absolute <?= $card['x'] ?> <?= $card['y'] ?> w-48 h-72 rounded-[1.4rem] <?= $card['bg'] ?> <?= $card['rot'] ?> <?= $card['z'] ?>
            shadow-2xl shadow-black/25 ring-1 ring-white/15 p-4 flex flex-col text-white origin-bottom cursor-pointer
            transition-transform duration-300 ease-out hover:-translate-y-5 hover:scale-[1.04] hover:rotate-0 hover:z-50">
            <!-- Card header -->
            <div class="flex items-center gap-2">
              <span class="w-7 h-7 rounded-lg bg-white/15 flex items-center justify-center">
                <span class="material-symbols-outlined text-[16px]">confirmation_number</span>
              </span>
              <span class="text-[13px] font-extrabold tracking-wide">WePASS</span>
            </div>
            <?php if (!empty($card['front'])): ?>
            <!-- Front card: QR -->
            <div class="mt-auto self-end">
              <div class="w-24 h-24 rounded-xl bg-white p-2 shadow-lg">
                <img alt="QR" class="w-full h-full"
                  src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&margin=0&data=wepass-pass-<?= $i ?>">
              </div>
            </div>
            <?php else: ?>
            <!-- Back cards: subtle sheen -->
            <span class="mt-auto block h-1 w-10 rounded-full bg-white/30"></span>
            <?php endif; ?>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Headline -->
        <h1 class="text-[42px] xl:text-[48px] leading-[1.05] font-extrabold tracking-tight text-on-surface">
          Manage <span class="text-primary">secure wallet programs</span> across Apple Wallet and Google Wallet.
        </h1>
        <p class="text-body-lg text-secondary mt-5 max-w-lg leading-relaxed">
          A centralized platform for issuing, updating, and operating loyalty, membership, ticketing, and offer passes
          at scale.
        </p>
      </div>

      <!-- Footer chips -->
      <div class="relative flex items-center gap-3">
        <span class="w-11 h-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center"><span class="material-symbols-outlined">favorite</span></span>
        <span class="w-11 h-11 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center"><span class="material-symbols-outlined">confirmation_number</span></span>
        <span class="w-11 h-11 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center"><span class="material-symbols-outlined">sell</span></span>
        <span class="w-11 h-11 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center"><span class="material-symbols-outlined">qr_code_2</span></span>
        <div class="flex items-center gap-2 ml-2">
          <span class="inline-flex items-center gap-1.5 bg-on-surface text-white text-label-md font-bold px-4 py-2 rounded-full">
            <svg viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4"><path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/></svg>
            Apple
          </span>
          <span class="inline-flex items-center gap-1.5 bg-on-surface text-white text-label-md font-bold px-4 py-2 rounded-full">
            <span class="material-symbols-outlined text-[16px]">play_arrow</span> Google
          </span>
        </div>
      </div>
    </section>

    <!-- ============ RIGHT: Sign in ============ -->
    <section class="flex items-center justify-center p-6 sm:p-10 bg-surface">
      <div class="w-full max-w-md">
        <!-- Mobile brand -->
        <div class="lg:hidden mb-8 text-center">
          <img src="https://drojrh3mlpzqs.cloudfront.net/9eda0c24-7ef8-4597-8d97-91cfa2d4d7d8/adminTheme/assets/images/logo-new.png"
            alt="WePass" class="h-9 w-auto object-contain mx-auto">
        </div>

        <p class="text-label-md font-bold uppercase tracking-widest text-primary">WePass Dashboard</p>
        <h2 class="text-display-sm font-bold text-on-surface mt-1">Sign in</h2>

        <form class="mt-8 space-y-5">
          <!-- Email -->
          <div class="space-y-2">
            <label class="text-on-surface font-bold text-label-md">Email</label>
            <input type="email" placeholder="you@example.com"
              class="w-full bg-surface-container-low border-outline-variant rounded-xl py-3.5 px-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
          </div>
          <!-- Password -->
          <div class="space-y-2">
            <label class="text-on-surface font-bold text-label-md">Password</label>
            <div class="relative">
              <input type="password" id="login-pw" placeholder="••••••••"
                class="w-full bg-surface-container-low border-outline-variant rounded-xl py-3.5 pl-4 pr-12 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
              <button type="button" data-toggle-pw="login-pw" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors">
                <span class="material-symbols-outlined text-[20px]">visibility</span>
              </button>
            </div>
          </div>

          <!-- Options -->
          <div class="flex items-center justify-between">
            <label class="inline-flex items-center gap-2 cursor-pointer select-none">
              <input type="checkbox" class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary/30">
              <span class="text-label-md text-secondary font-medium">Keep me signed in</span>
            </label>
            <a href="#" class="text-label-md font-bold text-on-surface hover:text-primary transition-colors">Forgot password?</a>
          </div>

          <!-- Sign in -->
          <button type="submit"
            class="w-full inline-flex items-center justify-center gap-2 bg-brand-gradient text-on-primary py-3.5 rounded-xl text-[15px] font-bold shadow-lg shadow-primary/25 hover:opacity-95 active:scale-[0.99] transition-all">
            Sign in
          </button>
        </form>

        <!-- Divider -->
        <div class="flex items-center gap-3 my-6">
          <span class="h-px flex-1 bg-outline-variant"></span>
          <span class="text-label-md text-outline">or continue with</span>
          <span class="h-px flex-1 bg-outline-variant"></span>
        </div>

        <!-- Social -->
        <div class="space-y-3">
          <button type="button" class="w-full inline-flex items-center justify-center gap-3 bg-white border border-outline-variant rounded-xl py-3 text-body-md font-bold text-on-surface hover:bg-surface-container-low transition-all">
            <svg viewBox="0 0 24 24" class="w-5 h-5">
              <path fill="#4285F4" d="M23.49 12.27c0-.79-.07-1.54-.19-2.27H12v4.51h6.47a5.54 5.54 0 0 1-2.4 3.64v3h3.86c2.26-2.09 3.56-5.17 3.56-8.88z"/>
              <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.86-3c-1.08.72-2.45 1.16-4.07 1.16-3.13 0-5.78-2.11-6.73-4.96H1.29v3.09A11.997 11.997 0 0 0 12 24z"/>
              <path fill="#FBBC05" d="M5.27 14.29c-.25-.72-.38-1.49-.38-2.29s.14-1.57.38-2.29V6.62H1.29A11.997 11.997 0 0 0 0 12c0 1.94.46 3.77 1.29 5.38l3.98-3.09z"/>
              <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.26 2.69 1.29 6.62l3.98 3.09C6.22 6.86 8.87 4.75 12 4.75z"/>
            </svg>
            Continue with Google
          </button>
          <button type="button" class="w-full inline-flex items-center justify-center gap-3 bg-white border border-outline-variant rounded-xl py-3 text-body-md font-bold text-on-surface hover:bg-surface-container-low transition-all">
            <svg viewBox="0 0 24 24" class="w-5 h-5">
              <path fill="#F25022" d="M1 1h10v10H1z"/><path fill="#7FBA00" d="M13 1h10v10H13z"/>
              <path fill="#00A4EF" d="M1 13h10v10H1z"/><path fill="#FFB900" d="M13 13h10v10H13z"/>
            </svg>
            Continue with Microsoft
          </button>
        </div>

        <!-- Create account -->
        <p class="text-center text-body-md text-secondary mt-6">Don't have an account?
          <a href="#" class="font-bold text-primary hover:underline">Create an account</a>
        </p>

        <!-- Secure note -->
        <div class="mt-6 flex items-center justify-center gap-2 bg-surface-container-low/60 border border-outline-variant/60 rounded-xl py-3 text-label-md text-secondary">
          <span class="material-symbols-outlined text-[18px] text-emerald-600">lock</span>
          Secure access to your WePass dashboard
        </div>
      </div>
    </section>
  </main>

  <script>
    document.querySelectorAll('[data-toggle-pw]').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var input = document.getElementById(btn.getAttribute('data-toggle-pw'));
        if (!input) return;
        var icon = btn.querySelector('.material-symbols-outlined');
        if (input.type === 'password') { input.type = 'text'; if (icon) icon.textContent = 'visibility_off'; }
        else { input.type = 'password'; if (icon) icon.textContent = 'visibility'; }
      });
    });
  </script>
</body>

</html>
