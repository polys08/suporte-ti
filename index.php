<?php
    $mostrarMenu = false;
    include 'templates/header.php';
?>

<section class="hero">
    <div class="hero text-center">

        <h1>Portal de Chamados</h1>

        <p class="lead mt-3">
            Gerencie solicitações de suporte técnico de forma rápida e organizada.
        </p>

    </div>
</section>

<section class="acessos">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card card-custom h-100">

                    <div class="card-body text-center">
                        <h4>Cadastrar Usuário</h4>
                        <p>
                            Cadastre colaboradores que utilizarão o sistema.
                        </p>

                        <a href="usuarios.php" class="btn btn-success">
                            Acessar
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">

                <div class="card card-custom h-100">
                    <div class="card-body text-center">
                        <h4>Abrir Chamado</h4>
                        <p>
                            Registre problemas em equipamentos e sistemas.
                        </p>

                        <a href="chamados.php" class="btn btn-primary">
                            Acessar
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-custom h-100">

                    <div class="card-body text-center">
                        <h4>Consultar Chamados</h4>
                        <p>
                            Visualize e acompanhe os chamados cadastrados.
                        </p>

                        <a href="listar_chamados.php" class="btn btn-dark">
                            Acessar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sobre text-center mt-5">
    <h2>Quem somos?</h2>

    <p>
        A TechOffice é uma empresa especializada em soluções
        de Tecnologia da Informação, oferecendo suporte técnico e
        gerenciamento de chamados para ambientes corporativos. A empresa
        tem como objetivo facilitar a comunicação entre usuários e equipe
        de suporte, proporcionando mais organização, agilidade e eficiência
        na resolução de problemas relacionados a equipamentos e sistemas.
<br>
        Com foco em qualidade e produtividade, a TechOffice
        desenvolve soluções que auxiliam no controle de solicitações,
        acompanhamento de atendimentos e melhoria dos processos internos
        de suporte.
    </p>

</section>

<section class="servicos mt-5">
    <h2 class="text-center">
        Nossos serviços
    </h2>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card card-custom text-center">
                    <div class="card-body">
                        <h4>Suporte Técnico</h4>
                        <p>
                            Atendimento para problemas relacionados a
                            equipamentos, sistemas e infraestrutura.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card card-custom text-center">
                    <div class="card-body">
                        <h4>Gestão de Chamados</h4>
                        <p>
                            Organização e acompanhamento das solicitações
                            realizadas pelos usuários.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-custom text-center">
                    <div class="card-body">
                        <h4>Soluções em TI</h4>
                        <p>
                            Melhorias e suporte para aumentar a produtividade
                            do ambiente corporativo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>


<?php include 'templates/footer.php'; ?>