<div class="d-md-block sidebar-expanded-md collapse sidebar">
<div class="sidebar-sticky">
	<div class="sidebar-wrapper">
		<ul class="nav d-flex flex-column m-4 my-5">
                <li class="nav-item">
                        <a href="{{ route('dashboard') }}" title='Consulta'>
                        <div class="row">
                            <span class="col-1">
                                <i class="fa fa-home ic-w mr-1"></i>
                            </span>
                            <span class="col">Dashboard</span>
                        </div>                   
                        </a>
                    </li>
            <li class="nav-item">
                <a href="{{ route('Consulta_index') }}" title='Consulta'>
                <div class="row">
                    <span class="col-1">
                        <i class="fa fa-search ic-w mr-1"></i>
                    </span>
                    <span class="col">Consulta</span>
                </div>                   
                </a>
            </li>
			<li class="nav-item">
               <a href="{{ route('cliente_index') }}" title='Clientes'>
                  <div class="row">
                    <span class="col-1">
                        <i class="fa fa-users ic-w mr-1"></i>
                    </span>
                    <span class="col">Cliente</span>
                  </div>
                </a>
            </li>
			<li class="nav-item">
                <a href="{{ route('Produto_index') }}" title='Produtos'>
                    <div class="row">
                        <span class="col-1">
                            <i class="fas fa-archive"></i>
                        </span>
                        <span class="col">
                            Produto
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Usuario_index') }}" title='Usuarios'>
                <div class="row">
                    <span class="col-1">
                        <i class="fas fa-user-tie"></i>
                    </span>
                    <span class="col">Usuario</span>
                </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Usuario_index') }}" title='Venda'>
                    <div class="row">
                        <span class="col-1">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                        <span class="col">
                            Venda
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Usuario_index') }}" title='Historico'>
                    <div class="row">
                        <span class="col-1">
                            <i class="fas fa-chart-pie"></i>
                        </span>
                        <span class="col">Historico</span>
                    </div>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('Usuario_index') }}" title='Encomenda'>
                   <div class="row">
                       <span class="col-1">
                            <i class="fas fa-shipping-fast"></i>
                       </span>
                       <span class="col">
                           Encomenda
                       </span>
                   </div>
                </a>
            </li>
            <li class="nav-item">
                <div class="dropdown" style="color:green"> 
                    <span><i class="fa fa-cog ic-w"></i>&nbsp;</span>
                    <a title='Configuracao' class="dropdown-toggle" 
                    id="menuConf"  data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">
                        <span >Configuração</span>
                    </a>
                  <div class="dropdown-menu" aria-labelledby="menuConf">
                    <a class="dropdown-item" href="{{ route('show_tipo_entidade') }}">{{ __('Cadastro do Tipo Entidade') }}</a>
                  </div>
                </div>
            </li>
		  </ul>
		</div>
	</div>
</div>
