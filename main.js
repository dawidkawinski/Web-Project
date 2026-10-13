document.getElementById('myForm').addEventListener('submit', (e) => {
    let isValid = true;
    
    const userName = document.getElementById('name').value.trim();
    const userEmail = document.getElementById('email').value.trim();
    const userMess = document.getElementById('message').value.trim();

    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const messError = document.getElementById('messError');

    nameError.style.display = 'none';
    emailError.style.display = 'none';
    messError.style.display = 'none';

    if (!userName) {
        nameError.style.display = 'block';
        isValid = false;
    }

    if (!userEmail) {
        emailError.style.display = 'block';
        isValid = false;
    }
    
    if (!userMess) {
        messError.style.display = 'block';
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
    }

})