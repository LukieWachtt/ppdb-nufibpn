document.querySelectorAll('[next-page]').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelector('[next-page]').value = button.getAttribute('next-page');
    });
});

Array.from(document.querySelector('.form-nav').children).forEach(button => {
    button.addEventListener('click', () => alert('Mohon gunakan tombol panah di bawah untuk berpindah halaman'));
});