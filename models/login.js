document.getElementById('criarConta').addEventListener('click', () => {
    document.getElementById('form-register').className = 'mostrar';
    document.getElementById('form-login').className = 'esconder';
});

document.getElementById('login').addEventListener('click', () => {
    document.getElementById('form-login').className = 'mostrar';
    document.getElementById('form-register').className = 'esconder';
});