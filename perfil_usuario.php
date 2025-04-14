<?php
//backend
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link dos ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title> USUÁRIO - Locadora de veículos</title>
</head>
<body class="container py-4">
    <div class="container py-4">
    <!--Barra de informações de usuario-->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center inicio ">
                <h1>Sistema de Locadora de veículos</h1>
                <div class="d-flex align-items-center gap-3 user-info mx-3">
                    <span class="user-icon">
                    <i class="bi bi-person-circle" style="font-size:24px"></i>
                    </span>
                    <!--Bem vindo,[usuario]-->
                    <span class="welcome-text">
                        Bem vindo, <strong>Usuário</strong>
                    </span>
                    <!--Botão de logout-->
                    <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                        <i class="bi bi-box-arrow-right"></i>
                        Sair
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Formulario para add novos veiculos-->
    <div class="row same-height-row">
        <div class="col-md-12">
            <div class="card-h-100">
                <div class="card-header">
                    <h4 class="mb-0">
                        Calcular a previsão de aluguel💰
                    </h4>
                </div>
                <div class="card-body">
                    <form action="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="" class="input-label">
                                Tipo de veículo
                            </label>
                            <select class="form-select" name="tipo" id="tipo" required>
                                <option value="carro">Carro</option>
                                <option value="moto">Moto</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">
                                Quantidade de dias 📅
                            </label>
                            <input type="number" name="dias_calculo" class="form-control" value="1" required>
                        </div>
                        <button class="btn btn-success w-100" type="submit" name="calcular"> Calcular previsão </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabela  de veiculos cadastrados -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">
                        Veículos cadastrados🗒️
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Tipo</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Status</th>
                                <th>Outros</th>
                                <th>Ações</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Carro</td>
                                    <td>Uno</td>
                                    <td>ABC1D34</td>
                                    <td>
                                        <span class="badge bg-success"> Disponível ✅</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#informacoes">Mais informações</button>
                                        <div class="modal fade" id="informacoes">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Mais informações sobre o veículo</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Especificações:</h6>
                                                        <br>
                                                        <p>Combustível:	Álcool E Gasolina</p>
                                                        <p>Velocidade Máxima(km/h):	157 Km/H</p>
                                                        <p>Potência (cv): 75</p>
                                                        <p>Tração: dianteira</p>
                                                        <p>Cor: Preto</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-info" data-bs-toggle="modal" class="nav-link active" data-bs-target="#contatoModal">Alugue</button>
                                        <div class="modal fade" id="contatoModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Alugue o Veiculo:</h5>
                                                        <button type="button" class="btn-close"  data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="nome" class="form-label">Nome:</label>
                                                                <input type="text" class="form-control" id="nome" required>
                                                            </div>
                                                            <div class="mb-3">
                                                            <label for="cpfContato" class="form-label">CPF:</label>
                                                            <input type="text" class="form-control" id="cpfContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailContato" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="emailContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="inputPassword5" class="form-label">Senha:</label>
                                                                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="diasAluguel" class="form-label">Dias de aluguel:</label>
                                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button type="submit" class="btn btn-info">Enviar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Moto</td>
                                    <td>Honda ADV</td>
                                    <td>BAC1D80</td>
                                    <td>
                                        <span class="badge bg-success"> Disponível ✅</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#informacoes2">Mais informações</button>
                                        <div class="modal fade" id="informacoes2">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Mais informações sobre o veículo</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Especificações:</h6>
                                                        <br>
                                                        <p>Combustível:	Gasolina</p>
                                                        <p>Torque Máximo: 38 kgf.m a 6.500 rpm</p>
                                                        <p>Potência Máxima: 13,2 cv a 8.500 rpm</p>
                                                        <p>Tipo de Motor: 4 tempo</p>
                                                        <p>Cor: Vermelha</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-info" data-bs-toggle="modal" class="nav-link active" data-bs-target="#contatoModal">Alugue</button>
                                        <div class="modal fade" id="contatoModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Alugue o Veiculo:</h5>
                                                        <button type="button" class="btn-close"  data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="nome" class="form-label">Nome:</label>
                                                                <input type="text" class="form-control" id="nome" required>
                                                            </div>
                                                            <div class="mb-3">
                                                            <label for="cpfContato" class="form-label">CPF:</label>
                                                            <input type="text" class="form-control" id="cpfContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailContato" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="emailContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="inputPassword5" class="form-label">Senha:</label>
                                                                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="diasAluguel" class="form-label">Dias de aluguel:</label>
                                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button type="submit" class="btn btn-info">Enviar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Carro</td>
                                    <td>Chevrolet Onix</td>
                                    <td>GBH5E83</td>
                                    <td>
                                        <span class="badge bg-danger"> Indisponível ❌</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#informacoes3">Mais informações</button>
                                        <div class="modal fade" id="informacoes3">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Mais informações sobre o veículo</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Especificações:</h6>
                                                        <br>
                                                        <p>Combustível:	Etanol e gasolina</p>
                                                        <p>Velocidade Máxima(km/h):	187 Km/H</p>
                                                        <p>Potência (cv): 78 cv</p>
                                                        <p>Tração: dianteira</p>
                                                        <p>Cor: Prata</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-info" data-bs-toggle="modal" class="nav-link active" data-bs-target="#contatoModal">Alugue</button>
                                        <div class="modal fade" id="contatoModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Alugue o Veiculo:</h5>
                                                        <button type="button" class="btn-close"  data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="nome" class="form-label">Nome:</label>
                                                                <input type="text" class="form-control" id="nome" required>
                                                            </div>
                                                            <div class="mb-3">
                                                            <label for="cpfContato" class="form-label">CPF:</label>
                                                            <input type="text" class="form-control" id="cpfContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailContato" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="emailContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="inputPassword5" class="form-label">Senha:</label>
                                                                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="diasAluguel" class="form-label">Dias de aluguel:</label>
                                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button type="submit" class="btn btn-info">Enviar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Moto</td>
                                    <td>Yamaha MT-03</td>
                                    <td>LGE2E03</td>
                                    <td>
                                        <span class="badge bg-danger"> Indisponível ❌</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#informacoes4">Mais informações</button>
                                        <div class="modal fade" id="informacoes4">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Mais informações sobre o veículo</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Especificações:</h6>
                                                        <br>
                                                        <p>Combustível: Gasolina</p>
                                                        <p>Velocidade Máxima(km/h):	180 km/h</p>
                                                        <p>Potência (cv): 41,3 cv</p>
                                                        <p>Torque: 3,0 kgf.m (9.000 rpm)</p>
                                                        <p>Cor: Preto</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-info" data-bs-toggle="modal" class="nav-link active" data-bs-target="#contatoModal">Alugue</button>
                                        <div class="modal fade" id="contatoModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Alugue o Veiculo:</h5>
                                                        <button type="button" class="btn-close"  data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="nome" class="form-label">Nome:</label>
                                                                <input type="text" class="form-control" id="nome" required>
                                                            </div>
                                                            <div class="mb-3">
                                                            <label for="cpfContato" class="form-label">CPF:</label>
                                                            <input type="text" class="form-control" id="cpfContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailContato" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="emailContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="inputPassword5" class="form-label">Senha:</label>
                                                                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="diasAluguel" class="form-label">Dias de aluguel:</label>
                                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button type="submit" class="btn btn-info">Enviar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>