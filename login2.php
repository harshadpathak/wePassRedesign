<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WePass - Sign in</title>
  <?php include('head.php'); ?>
  <style>
    .pass-card {
      filter: grayscale(0.5) drop-shadow(0 12px 24px rgba(0, 0, 0, 0.15));
    }
  </style>
</head>

<body class="bg-background text-on-surface selection:bg-primary-container/20 selection:text-primary">
  <main class="min-h-screen grid grid-cols-1 lg:grid-cols-2 bg-gradient-to-br from-indigo-100 via-blue-50 to-emerald-50">
    <!-- ============ LEFT: Hero ============ -->
    <section class="relative hidden lg:flex flex-col justify-between overflow-hidden p-10 xl:p-14">
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
        <div class="relative h-80 mb-16 ml-10 xl:ml-20">
          <?php
            $cards = [
              ['img' => 'https://drojrh3mlpzqs.cloudfront.net/69067192-2b41-495d-96c7-4fd3c07d3858/images/apple/6.png', 'rot' => '-rotate-[14deg]', 'x' => 'left-0',  'y' => 'top-7', 'z' => 'z-10'],
              ['img' => 'https://drojrh3mlpzqs.cloudfront.net/69067192-2b41-495d-96c7-4fd3c07d3858/images/apple/4.png', 'rot' => '-rotate-[8deg]',  'x' => 'left-24', 'y' => 'top-3', 'z' => 'z-20'],
              ['img' => 'https://drojrh3mlpzqs.cloudfront.net/69067192-2b41-495d-96c7-4fd3c07d3858/images/apple/2.png', 'rot' => '-rotate-[2deg]',  'x' => 'left-48', 'y' => 'top-3', 'z' => 'z-30'],
              ['img' => 'https://drojrh3mlpzqs.cloudfront.net/69067192-2b41-495d-96c7-4fd3c07d3858/images/apple/1.png', 'rot' => 'rotate-[8deg]',   'x' => 'left-72', 'y' => 'top-7', 'z' => 'z-40'],
            ];
            foreach ($cards as $i => $card):
          ?>
          <img src="<?= htmlspecialchars($card['img']) ?>" alt="WePass pass card"
            class="pass-card absolute <?= $card['x'] ?> <?= $card['y'] ?> w-48 h-auto rounded-[0.8rem] <?= $card['rot'] ?> <?= $card['z'] ?>
            origin-bottom cursor-pointer object-contain opacity-90
            transition-all duration-300 ease-out hover:-translate-y-5 hover:scale-[1.04] hover:rotate-0 hover:z-50 hover:opacity-100">
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

      <!-- Footer chips (pass types) -->
      <?php
        $passTypes = [
          ['label' => 'Gift Card',       'icon' => 'card_giftcard',       'c' => 'bg-rose-100 text-rose-600'],
          ['label' => 'Boarding Pass',   'icon' => 'flight',              'c' => 'bg-sky-100 text-sky-600'],
          ['label' => 'Coupon',          'icon' => 'local_offer',         'c' => 'bg-amber-100 text-amber-600'],
          ['label' => 'Event Ticket',    'icon' => 'confirmation_number', 'c' => 'bg-indigo-100 text-indigo-600'],
          ['label' => 'Loyalty Card',    'icon' => 'favorite',            'c' => 'bg-pink-100 text-pink-600'],
          ['label' => 'Generic Pass',    'icon' => 'badge',               'c' => 'bg-primary/10 text-primary'],
          ['label' => 'Membership Card', 'icon' => 'groups',              'c' => 'bg-teal-100 text-teal-600'],
          ['label' => 'Insurance Pass',  'icon' => 'shield',              'c' => 'bg-emerald-100 text-emerald-600'],
          ['label' => 'Business Card',   'icon' => 'business_center',     'c' => 'bg-slate-200 text-slate-600'],
          ['label' => 'Warranty Pass',   'icon' => 'workspace_premium',   'c' => 'bg-violet-100 text-violet-600'],
          ['label' => 'Loyalty Tier',    'icon' => 'emoji_events',        'c' => 'bg-orange-100 text-orange-600'],
        ];
      ?>
      <div class="relative flex flex-wrap items-center gap-2.5">
        <?php foreach ($passTypes as $p): ?>
        <span title="<?= htmlspecialchars($p['label']) ?>"
          class="group relative w-11 h-11 rounded-xl <?= $p['c'] ?> flex items-center justify-center cursor-default transition-transform hover:-translate-y-1">
          <span class="material-symbols-outlined text-[22px]"><?= $p['icon'] ?></span>
          <span class="pointer-events-none absolute bottom-full mb-2 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-lg bg-on-surface text-white text-label-sm font-semibold px-2.5 py-1 opacity-0 group-hover:opacity-100 transition-opacity"><?= htmlspecialchars($p['label']) ?></span>
        </span>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- ============ RIGHT: Sign in (glass card) ============ -->
    <section class="relative flex items-center justify-center overflow-hidden p-6 sm:p-10">
      <!-- Decorative blobs -->
      <span class="pointer-events-none absolute -top-24 -right-24 w-80 h-80 rounded-full bg-primary/5 blur-3xl"></span>
      <span class="pointer-events-none absolute -bottom-24 -left-16 w-80 h-80 rounded-full bg-emerald-200/20 blur-3xl"></span>

      <div class="relative w-full max-w-md">
        <!-- Floating brand badge -->
        <div class="flex justify-center">
          <div class="w-16 h-16 rounded-2xl bg-brand-gradient text-white flex items-center justify-center shadow-xl shadow-primary/30 -mb-8 relative z-10 ring-4 ring-white/70">
            <span class="material-symbols-outlined text-[32px]">account_balance_wallet</span>
          </div>
        </div>

        <div class="bg-white/80 backdrop-blur-xl rounded-3xl border border-white/60 shadow-2xl shadow-primary/10 px-7 sm:px-9 pt-14 pb-8">
          <!-- Heading -->
          <div class="text-center">
            <h2 class="text-headline-lg font-bold text-on-surface tracking-tight">Welcome back</h2>
            <p class="text-body-md text-secondary mt-1">Sign in to your WePass dashboard</p>
          </div>

          <!-- Form -->
          <form class="mt-6 space-y-4">
            <!-- Email -->
            <div class="space-y-1.5">
              <label class="text-on-surface font-bold text-label-md">Email Address</label>
              <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">mail</span>
                <input type="email" placeholder="you@example.com"
                  class="w-full bg-surface-container-low/70 border-outline-variant rounded-xl py-3.5 pl-11 pr-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
              </div>
            </div>
            <!-- Password -->
            <div class="space-y-1.5">
              <label class="text-on-surface font-bold text-label-md">Password</label>
              <div class="relative">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
                <input type="password" id="login2-pw" placeholder="••••••••"
                  class="w-full bg-surface-container-low/70 border-outline-variant rounded-xl py-3.5 pl-11 pr-12 text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                <button type="button" data-toggle-pw="login2-pw" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors">
                  <span class="material-symbols-outlined text-[20px]">visibility</span>
                </button>
              </div>
            </div>

            <!-- Options -->
            <div class="flex items-center justify-between pt-1">
              <label class="inline-flex items-center gap-2 cursor-pointer select-none">
                <input type="checkbox" class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary/30">
                <span class="text-label-md text-secondary font-medium">Remember me</span>
              </label>
              <a href="#" class="text-label-md font-bold text-primary hover:underline">Forgot password?</a>
            </div>

            <!-- Sign in -->
            <button type="submit"
              class="w-full inline-flex items-center justify-center gap-2 bg-brand-gradient text-on-primary py-3.5 rounded-xl text-[15px] font-bold shadow-lg shadow-primary/25 hover:opacity-95 active:scale-[0.99] transition-all mt-1">
              <span class="material-symbols-outlined text-[20px]">login</span>
              Sign in
            </button>
          </form>

          <!-- Divider -->
          <div class="flex items-center gap-3 my-5">
            <span class="h-px flex-1 bg-outline-variant"></span>
            <span class="text-label-md text-outline">or</span>
            <span class="h-px flex-1 bg-outline-variant"></span>
          </div>

          <!-- Social (side by side) -->
          <div class="grid grid-cols-2 gap-3">
            <button type="button" class="inline-flex items-center justify-center gap-2 bg-white border border-outline-variant rounded-xl py-3 text-label-md font-bold text-on-surface hover:bg-surface-container-low transition-all">
              <svg viewBox="0 0 24 24" class="w-5 h-5">
                <path fill="#4285F4" d="M23.49 12.27c0-.79-.07-1.54-.19-2.27H12v4.51h6.47a5.54 5.54 0 0 1-2.4 3.64v3h3.86c2.26-2.09 3.56-5.17 3.56-8.88z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.86-3c-1.08.72-2.45 1.16-4.07 1.16-3.13 0-5.78-2.11-6.73-4.96H1.29v3.09A11.997 11.997 0 0 0 12 24z"/>
                <path fill="#FBBC05" d="M5.27 14.29c-.25-.72-.38-1.49-.38-2.29s.14-1.57.38-2.29V6.62H1.29A11.997 11.997 0 0 0 0 12c0 1.94.46 3.77 1.29 5.38l3.98-3.09z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.26 2.69 1.29 6.62l3.98 3.09C6.22 6.86 8.87 4.75 12 4.75z"/>
              </svg>
              Google
            </button>
            <button type="button" class="inline-flex items-center justify-center gap-2 bg-white border border-outline-variant rounded-xl py-3 text-label-md font-bold text-on-surface hover:bg-surface-container-low transition-all">
              <svg viewBox="0 0 24 24" class="w-5 h-5">
                <path fill="#F25022" d="M1 1h10v10H1z"/><path fill="#7FBA00" d="M13 1h10v10H13z"/>
                <path fill="#00A4EF" d="M1 13h10v10H1z"/><path fill="#FFB900" d="M13 13h10v10H13z"/>
              </svg>
              Microsoft
            </button>
          </div>

          <!-- Create account -->
          <p class="text-center text-body-md text-secondary mt-6">Don't have an account?
            <a href="#" class="font-bold text-primary hover:underline">Create one</a>
          </p>
        </div>

        <!-- Secure note -->
        <p class="flex items-center justify-center gap-1.5 text-label-md text-secondary mt-5">
          <span class="material-symbols-outlined text-[16px] text-emerald-600">lock</span>
          Secured with 256-bit encryption
        </p>
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
