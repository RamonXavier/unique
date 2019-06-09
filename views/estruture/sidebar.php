<?php
include 'header.php'; 
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
  {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:../../index.php');
  }

$logado = $_SESSION['login'];


?>
<div class="page-container">
  <div class="content">
    <h2>Page content</h2>
  </div>
  
  <div class="sidebar-menu">
    <header class="logo">
      <a href="#" class="sidebar-icon">
        <span class="fa fa-bars"></span>
      </a>

      <a href="#">
        <span id="logo" class="fa fa-codepen fa-5x"></span>
        <!--<img id="logo" src="" alt="Logo"/>-->
      </a>                    
    </header>

    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>

    <div class="menu">
      <ul id="menu" >
        <li id="menu-home" ><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-envelope"></i><span>Comunicação</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
            <ul id="menu-comunicacao-sub" >
                <li id="menu-mensagens" style="width: 120px" ><a href="#">Mensagens<i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
                    <ul id="menu-mensagens-sub" >
                        <li id="menu-mensagens-enviadas" ><a href="#">Enviados</a></li>
                        <li id="menu-mensagens-recebidas" ><a href="#">Recebidos</a></li>
                        <li id="menu-mensagens-nova" ><a href="#">Nova Mensagem</a></li>
                    </ul>
                </li>
                <li id="menu-arquivos" ><a href="#">Arquivos</a></li>
            </ul>
        </li>
        <li id="menu-academico" ><a href="#"><i class="fa fa-graduation-cap"></i><span>Acadêmico</span><span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub" >				
                <li id="menu-academico-avaliacoes" ><a href="#">Avaliações</a></li>
                <li id="menu-academico-boletim" ><a href="#">Boletim</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-table"></i><span>Agenda</span><span class="fa fa-angle-right" style="float: right"></span></a>
            <ul>				
                <li><a href="#">Avaliações Agendadas</a></li>
                <li><a href="#">Faltas</a></li>
                <li><a href="#">Calendário</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-history"></i><span>Rematrícula</span></a></li>
        <li><a href="#"><i class="fa fa-gears"></i><span>Dados Cadastrais</span></a></li>
        <li><a href="#"><i class="fa fa-institution"></i><span>Instituição</span><span class="fa fa-angle-right" style="float: right"></span></a>
            <ul>				
                <li><a href="#">Relação de Alunos</a></li>
                <li><a href="#">Relação de Professores</a></li>
                <li><a href="#">Plano de Ensino</a></li>
                <li><a href="#">Pagamentos Pendentes</a></li>
            </ul>
        </li>
        <li><a href="../../config/Logout.php"><i class="fa fa-gears"></i><span>Sair</li></span></a></li>
    </ul>
    </div>
  </div>
</div>
  <script src="../../js/sidebar.js"></script>  
<?php include 'footer.php'?>
