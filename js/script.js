let div1 = document.querySelector('.a-space'),
    div2 = document.querySelector('.free-space'),
    booking = document.querySelector('.booking');

div1.addEventListener('click', () => {
    booking.style.display = "none";
    div2.style.display = "flex";
    div1.classList.add('active');
    document.querySelector('.btn-book').classList.remove('active');
})


document.querySelector('.btn-book').addEventListener('click', () => {
    div1.classList.remove('active');
    document.querySelector('.btn-book').classList.add('active');
    booking.style.display = "block";
    div2.style.display = "none";
});
