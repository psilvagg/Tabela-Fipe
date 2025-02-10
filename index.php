<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela FIPE</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
    <style>
        body {
            background-color: rgb(0, 0, 0);
            color: #e0e0e0;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 600px;
            margin-top: 5%;
        }

        .box {
            background: linear-gradient(135deg, #222 0%, #333 100%);
            border: 1px solid #444;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .input,
        .select select {
            background-color: #292929;
            border: 1px solid #555;
            color: #e0e0e0;
            border-radius: 6px;
            height: 45px;
            font-size: 1rem;
        }

        .select select {
            padding: 10px;
        }

        .button.is-primary {
            background: linear-gradient(135deg, #7b1fa2 0%, #512da8 100%);
            border: none;
            color: #fff;
            transition: 0.3s;
            border-radius: 8px;
            font-size: 1rem;
            height: 45px;
        }

        .button.is-primary:hover {
            background: linear-gradient(135deg, #512da8 0%, #311b92 100%);
        }

        .table-container {
            overflow-x: auto;
        }

        .table {
            background-color: #1e1e1e;
            color: #e0e0e0;
            border-radius: 8px;
            width: 100%;
            text-align: center;
        }

        .table th {
            background-color: #ccc;
            color: #ffffff;
            text-transform: uppercase;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #2a2a2a;
        }

        h1,
        .label {
            color: #fff;
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .field {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title" style="color: #fff;">Consulte a Tabela FIPE</h1>
            <div class="box">
                <form>
                    <div class="field">
                        <label class="label">Tipo de Veículo</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="tipo" id="tipo">
                                    <option value="" disabled selected>Selecione o tipo do veículo...</option>
                                    <option value="carros">Carro</option>
                                    <option value="motos">Moto</option>
                                    <option value="caminhoes">Caminhão</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Marca</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="marcas" id="marcas">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Modelo</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="modelo" id="modelo">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Ano</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="anos" id="anos">
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="box">
                <h2 class="subtitle" style="color: #fff;">Resultado da Consulta</h2>
                <div class="table-container">
                    <table id="resultados" class="table is-fullwidth is-striped is-hoverable">
                        <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Ano</th>
                                <th>Valor</th>
                                <th>Combustível</th>
                                <th>Mês de Referência</th>
                                <th>Código Fipe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dados serão exibidos aqui -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div style="text-align: center; color: #ccc; margin-top: 50px; font-size: 1.1rem;">
                <a href="https://www.pedro-dev.me" target="_blank" style="color:rgb(105, 105, 105); font-weight: bold;">https://www.pedro-dev.me</a>
                </p>
                <p>Dados fornecidos pela <a href="https://deividfortuna.github.io/fipe/" target="_blank" style="color: #ffdd57;">API Fipe</a></p>
            </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="index.js"></script>
</body>


</html>