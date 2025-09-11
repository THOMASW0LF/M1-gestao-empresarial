<div class="card" style="width: 18rem;">
    <img src="{{'https://images.tcdn.com.br/img/img_prod/829162/produto_teste_nao_compre_81_1_2d7f0b8fa031db8286665740dd8de217.jpg' }}" class="card-img-top" alt="{{ $titulo ?? 'Produto' }}">
    <div class="card-body">
        <h5 class="card-title">{{ $titulo }}</h5>
        <p class="card-text">{{ $descricao }}</p>
        <a href="{{ $link ?? '#' }}" class="btn btn-primary">Ver mais</a>
    </div>
</div>
