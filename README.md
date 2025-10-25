Grande parte desse trabalho foi desenvolvido tendo o projeto das mensagens como base para criar formulários, para enviar os dados para o banco e como mostrar todos os produtos cadastrados

* Como criar validacao de dados e como fazer para o valor ser unico

Writing the Validation Logic
https://laravel.com/docs/12.x/validation

Exemplo utilizado:

public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]);
 
    // The blog post is valid...
 
    return redirect('/posts');
}

* como criar alertas de erro

Validation Errors
https://laravel.com/docs/12.x/blade#validation-errors

Exemplo utilizado:

<label for="title">Post Title</label>
 
<input
    id="title"
    type="text"
    class="@error('title') is-invalid @enderror"
/>
 
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

* relembrando como funciona o event listener:

https://www.youtube.com/watch?v=bRRE2sAfv-U
minuto 03:03

* video do cep

https://www.youtube.com/watch?v=3W3Nk-bxaIs&list=WL&index=4
minuto 01:04


* onblur event
https://www.youtube.com/watch?v=poUhvC8MsH8
minuto 0:54

* Retorno do Tinker
 id: 1,
        nome: "Leandro",
        sobrenome: "bona da silva",
        cpf: "11111111111",
        email: "leandro@gmail.com",
        cep: "89300001",
        logradouro: "Rua Basílio Celestino de Oliveira",
        bairro: "Centro II Alto de Mafra",
        cidade: "Mafra",
        uf: "SC",
        created_at: "2025-10-20 01:24:10",
        updated_at: "2025-10-20 01:24:10",


video da imagem

* https://www.youtube.com/watch?v=CRTcfgNELL4&list=WL&index=2
minuto 5:56