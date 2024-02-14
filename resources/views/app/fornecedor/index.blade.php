<h3>Fornecedores</h3>

Fornecedor: {{  $fornecedores[0]['nome']}}
<hr>
Status: {{ $fornecedores[0]['status']}}
<hr>
@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor: inativo
@endunless
