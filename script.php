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