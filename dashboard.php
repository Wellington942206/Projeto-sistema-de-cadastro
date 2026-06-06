<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MiniCRM-Palestrante</title>

    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<script src="js/funcoes.js"></script>


    <section class="cadastro-screen" id="cadastroScreen">

        <div class="login-container cadastro">

            <div class="icon-top">
                <i class='bx bxs-user-plus'></i>
            </div>

            <h1>Cadastro de Cliente</h1>

            <form id="clienteForm">

                <div class="input-box">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="nome" placeholder="Nome">
                </div>

                <div class="input-box">
                    <i class='bx bxs-building-house'></i>
                    <input type="text" name="cnpj" placeholder="CNPJ">
                </div>

                <div class="input-box">
                    <i class='bx bx-file'></i>
                    <input type="text" name="inscestadual" placeholder="Inscrição Estadual">
                </div>

                <div class="input-box">
                    <i class='bx bxs-user-detail'></i>
                    <input type="text" name="responsavel" placeholder="Responsável">
                </div>

                <div class="input-box">
                    <i class='bx bx-id-card'></i>
                    <input type="text" name="cpf" placeholder="CPF">
                </div>

                <div class="input-box">
                    <i class='bx bx-credit-card'></i>
                    <input type="text" name="rg" placeholder="RG">
                </div>

                <div class="input-box">
                    <i class='bx bxs-map'></i>
                    <input type="text" name="endereco" placeholder="Endereço">
                </div>

                <div class="input-box">
                    <i class='bx bx-home'></i>
                    <input type="text" name="num" placeholder="Número">
                </div>

                <div class="input-box">
                    <i class='bx bx-building'></i>
                    <input type="text" name="numcomp" placeholder="Complemento">
                </div>

                <div class="input-box">
                    <i class='bx bx-map-pin'></i>
                    <input type="text" name="bairro" placeholder="Bairro">
                </div>

                <div class="input-box">
                    <i class='bx bx-city'></i>
                    <input type="text" name="cidade" placeholder="Cidade">
                </div>

                <div class="input-box">
                    <i class='bx bx-world'></i>
                    <input type="text" name="estado" placeholder="Estado">
                </div>

                <div class="input-box">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="email" placeholder="E-mail">
                </div>

                <div class="input-box">
                    <i class='bx bx-message-detail'></i>
                    <input type="text" name="obs" placeholder="Observações">
                </div>

                <button type="submit">CADASTRAR</button>

                <p class="register">
                    Após cadastrar você será levado para agenda CRM
                </p>

            </form>

        </div>

    </section>

   

    <section class="dashboard" id="dashboard">

        <header class="topbar">

            <div class="logo">
                <i class='bx bxs-calendar'></i>
                <span>Mini CRM</span>
            </div>

            <nav>
                <a href="#">Agenda</a>
                <a href="#">Clientes</a>
                <a href="#">Eventos</a>
                <a href="#">Relatórios</a>
            </nav>

            <div class="user">
                <i class='bx bxs-user-circle'></i>
                <span>Administrador</span>
            </div>

        </header>

        <main class="container">

            <div class="calendar-header">

                <div class="month-control">

                    <button id="prev">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <h2 id="monthYear"></h2>

                    <button id="next">
                        <i class='bx bx-chevron-right'></i>
                    </button>

                </div>

                <div class="actions">

                    <button class="blue-btn">
                        <i class='bx bx-filter'></i>
                        Filtros
                    </button>

                    <button class="blue-btn">
                        <i class='bx bx-plus'></i>
                        Novo Evento
                    </button>

                </div>

            </div>

            <div class="calendar">

                <div class="weekdays">
                    <div>Dom</div>
                    <div>Seg</div>
                    <div>Ter</div>
                    <div>Qua</div>
                    <div>Qui</div>
                    <div>Sex</div>
                    <div>Sáb</div>
                </div>

                <div class="days" id="calendarDays"></div>

            </div>

        </main>

    </section>

</body>
</html>