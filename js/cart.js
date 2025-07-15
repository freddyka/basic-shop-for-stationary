// Quantity auto-update
document.querySelectorAll('.qty').forEach(input => {
    input.addEventListener('change', () => {
        const row = input.closest('tr');
        const productId = row.dataset.id;
        const quantity = input.value;

        fetch('update-cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `id=${productId}&quantity=${quantity}`
        }).then(() => {
            location.reload();
        });
    });
});

// AJAX Remove-from-cart
document.querySelectorAll('.remove-item').forEach(button => {
    button.addEventListener('click', e => {
        e.preventDefault();
        const productId = button.dataset.id;

        fetch('remove-from-cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `id=${productId}`
        }).then(() => {
            const row = button.closest('tr');
            row.remove();
            location.reload(); // or recalc totals manually
        });
    });
});
