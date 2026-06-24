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
    sidebar.classList.toggle('sidebar-collapsed');
});
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