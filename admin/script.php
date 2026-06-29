<script>
// Simple search input highlight effect
const searchInput = document.querySelector('input[type="text"]');
searchInput.addEventListener('focus', () => {
    searchInput.parentElement.classList.add('scale-[1.01]');
});
searchInput.addEventListener('blur', () => {
    searchInput.parentElement.classList.remove('scale-[1.01]');
});

// Interactive row hover enhancement
document.querySelectorAll('tbody tr').forEach(row => {
    row.addEventListener('mouseenter', () => {
    row.querySelector('button.material-symbols-outlined').classList.add('text-primary');
    });
    row.addEventListener('mouseleave', () => {
    if (!row.classList.contains('active-row')) { // Optional state check
        row.querySelector('button.material-symbols-outlined').classList.remove('text-primary');
    }
    });
});
</script>
<script>
// Shared row action menus (apiKeys pattern) — used across all pages.
(function () {
    var menus = document.querySelectorAll('.js-menu');
    if (!menus.length) return;
    function closeAll(except) {
        menus.forEach(function (m) {
            if (m !== except) {
                var p = m.querySelector('.js-menu-panel');
                if (p) p.classList.add('hidden');
            }
        });
    }
    menus.forEach(function (menu) {
        var toggle = menu.querySelector('.js-menu-toggle');
        var panel = menu.querySelector('.js-menu-panel');
        if (!toggle || !panel) return;
        toggle.addEventListener('click', function (e) {
            e.stopPropagation();
            var isHidden = panel.classList.contains('hidden');
            closeAll(menu);
            panel.classList.toggle('hidden', !isHidden);
        });
    });
    document.addEventListener('click', function () { closeAll(null); });
})();
</script>
<script>
document.getElementById('sidebar-toggle').addEventListener('click', function () {
    const sidebar = document.querySelector('aside');
    // On mobile, this button closes the off-canvas drawer instead of collapsing the rail
    if (window.matchMedia('(max-width: 1023px)').matches) {
        sidebar.classList.remove('mobile-open');
        var bd = document.getElementById('sidebar-backdrop');
        if (bd) bd.classList.add('hidden');
        return;
    }
    sidebar.classList.toggle('sidebar-collapsed');
});
</script>
<script>
// Mobile off-canvas sidebar drawer
(function () {
    var sidebar = document.querySelector('aside');
    var backdrop = document.getElementById('sidebar-backdrop');
    var openBtn = document.getElementById('mobile-menu-btn');
    if (!sidebar) return;

    function openSidebar() {
        sidebar.classList.add('mobile-open');
        if (backdrop) backdrop.classList.remove('hidden');
    }
    function closeSidebar() {
        sidebar.classList.remove('mobile-open');
        if (backdrop) backdrop.classList.add('hidden');
    }

    if (openBtn) openBtn.addEventListener('click', openSidebar);
    if (backdrop) backdrop.addEventListener('click', closeSidebar);

    // Close the drawer after tapping a nav link on mobile
    sidebar.querySelectorAll('nav a[href]').forEach(function (link) {
        link.addEventListener('click', function () {
            if (window.matchMedia('(max-width: 1023px)').matches) closeSidebar();
        });
    });

    // Reset state when resizing up to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1024) closeSidebar();
    });
})();
</script>
<script>
// Script updated to remove accordion behavior. 
// Clicking a submenu only toggles that specific submenu without affecting others.
document.querySelectorAll('aside nav .group\\/nav > button').forEach(button => {
    button.addEventListener('click', function (e) {
    // Toggle current submenu
    const currentSubmenu = this.nextElementSibling;
    const currentChevron = this.querySelector('.chevron');

    // The inline onclick handles the 'hidden' class toggle for simple submenus,
    // and we just need to ensure no other code is closing other submenus.
    // Reverted the 'close others' logic here.
    });
});
</script>