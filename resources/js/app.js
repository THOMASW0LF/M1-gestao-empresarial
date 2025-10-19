import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

 document.addEventListener('DOMContentLoaded', () => {
    const cepInput = document.getElementById('cep');

    cepInput.addEventListener('blur', () => {
        const cep = cepInput.value

        const url = `https://viacep.com.br/ws/${cep}/json/`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                
                document.getElementById('logradouro').value = data.logradouro
                document.getElementById('bairro').value = data.bairro
                document.getElementById('cidade').value = data.localidade
                document.getElementById('uf').value = data.uf
            })    
    });
    
});
