document.querySelectorAll('[next-page]').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelector('[next-page]').value = button.getAttribute('next-page');
        // console.log('added the next-page thing');
    });
});

// document.querySelectorAll('[formmethod]').forEach(button => {
//     button.addEventListener('click', () => {
//         document.querySelector('[name="_method"]').value = button.getAttribute('formmethod');
//         // console.log('added the formmethod thing');
//     });
// });

Array.from(document.querySelector('.form-nav').children).forEach(button => {
    button.addEventListener('click', () => alert('Mohon gunakan tombol panah di bawah untuk berpindah halaman'));
});