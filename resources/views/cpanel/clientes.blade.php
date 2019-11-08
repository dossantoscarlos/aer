
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/cliente.css') }}" />
<div class="card">
 	<div class="card-header">
 	    <h2 class="card-title">Cliente </h2>
     </div>
 	<div class="card-body">
    		<fieldset class="fieldset">
             <legend>Dados Pessoais</legend>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" id="codigo" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="Text" name="cpf" id='cpf' class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for='nome'>Nome</label>
                            <input type="text" id='nome' name="nome" class="form-control"/>
                       </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="data_nasc"> data de nascimento</label>
                            <input type="date" name="data_nasc" id="data_nasc" value=<?=date('Y-m-d')?>  class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="data_insc">
                                Data de inscrição
                            </label>
                            <input type="date" name="data_insc" value=<?=date('Y-m-d')?>  id="data_insc" class="form-control"/>
                        </div>
                    </div>
                </div>
 			</fieldset>
 			<fieldset>
                 <legend>Dados de contado</legend>
                 <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for='celular'>Celular </label>
                            <input type="phone" minlength="12"  maxlength="12" name="celular" id='celular' class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for='fixo'> Telefone Fixo </label>
                            <input type="phone" minlength="12"  maxlength="12" name="fixo" id='fixo' class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                            <div class="form-group">
                                <label for='email'> E-mail </label>
                                <input type="email"  name="email" id='email' class="form-control">
                            </div>
                        </div>
                 </div>
            </fieldset>
            <fieldset class="fieldset">
                <legend>Endereço</legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="Cep">CEP</label>
                            <input type="text" name='cep' id='cep' maxlength="8" minlength="8" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="logradouro">Rua</label>
                            <input type="text" name="logradouro" id="logradouro" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" id="complemento" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numero">Numero</label>
                            <input type="number" name="numero" min=0 id="numero" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="uf">UF</label>
                            <select name="uf" id="uf" class="form-control select">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" />
                        </div>
                    </div>
               </div>
            </fieldset>
            <fieldset>
                <legend>Dados adicionais</legend>
                   <div class="row">
                       <div class="col-md-4">
                            <label for="contrato" class="sr-only">Upload de Contrato</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" id="contrato" class="custom-file-input" accept="application/pdf" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" id="rotulo" for="contrato">Selecione seu arquivo</label>

                                </div>
                            </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-6">
                            <div class="form-group">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Arquivo</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>contrato</td>
                                            <td>22/34/89</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                       </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="observacao">Observação</label>
                            <textarea name="observacao" id="observacao" cols="50" rows="5"
                            class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <div class="form-group">
                            <label for="historico">Historico de compra</label>
                            <textarea name="historico" id="historico" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </fieldset>

 			<section class='form-group right'>
 				<button type='button' class="btn btn-lg btn-md btn-primary" id="btn_gravar">Gravar</button>
 				<button type="button" class="btn btn-lg btn-md btn-danger" id="btn_excluir">Excluir</button>
            </section>
 		</div>
 	</div>
 </div>

 <!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" 
aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header alert-warning ">
        <h5 class="modal-title " id="modalTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="font-size:14pt"></div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>
<script src="{{ asset('js/cep.js') }}"></script>
<script >
   (() => {
    
   });
</script>
<script > 
    (() => {
        //init 
        $("#codigo").val("0");
        $("#codigo").prop("disabled","true");        
        $("#historico").prop('disabled','true');
        $("#data_insc").prop('disabled','true');
    })();
</script>
<script>
    (()=>{
        //event inputs
        $("#contrato").on('change',() => {
            let contrato = document.getElementById("contrato");
            let rotulo = document.getElementById("rotulo");
            if(contrato.files.length > 0 ){
                let nome = contrato.files[0].name;
                rotulo.innerHTML = nome.replace('.pdf','');
                rotulo.setAttribute('title',nome);
            }
        });
        $("#cep").on("focus", () => {                
            $("#cep").on("keypress", (event) => {
                if(event.keyCode == 13){
                    consultaCep();
                }
            });
            $("#cep").on("blur",() =>{
                consultaCep();
            });
        });
        $("#cpf").on("focus", ()=> {
            $("#cpf").on("blur",function(event){
                console.log(event);
            });
            $("#cpf").on("keypress",() => {
                if (event.keyCode == 13){
                    $.ajax({
                        url:"Clientes/cpf/"+$("#cpf").val(),
                        method: "get",
                        success: (response) => {
                            console.log("evnto funcionando");
                        }
                    }) 
                }
            });
        });
    })();
</script>
<script >
    (()=> {
        const newCliente = () => {
            const Cliente = new Object();
            Cliente.codigo = $("#codigo").val();
            Cliente.cpf = $("#cpf").val();
            Cliente.nome = $("#nome").val();
            Cliente.celular = $("#celular").val();   
            Cliente.fixo = $("#fixo").val();
            Cliente.data_nasc = $("#data_nasc").val();
            Cliente.data_insc= $("#data_insc").val();
            Cliente.email = $("#email").val();
            Cliente.cep = $("#cep").val();
            Cliente.logradouro = $("#logradouro").val();
            Cliente.numero = $("#numero").val();
            Cliente.complemento = $("#complemento").val();
            Cliente.observacao = $("#observacao").val();
            Cliente.cidade = $("#cidade").val();
            Cliente.bairro = $("#bairro").val();
            Cliente.uf = $("#uf option:selected").val();  
            const clienteObj = JSON.stringify(Cliente);
            return clienteObj;
        };  


        $('#btn_excluir').on('click', () => {
           console.log("excluindo");
        });
        $("#btn_gravar").on("click", () => {
         	if (codigo.value =="0"){
				$.post({
                    url: "{{ route('cliente_create') }}",
                    data: {
                        cliente: newCliente(),
                    },
                    success: (response) => {
                        $('#modal').modal('show')
                        $('#modal').find('.modal-header').addClass("modal-header alert-warning")
                        $('#modal').find('.modal-title').text("Alert")
                        $('#modal').find('.modal-body').text(response.result)
                    }
                });
			}else{
                $.ajax({
                    type: 'POST', // Use POST with X-HTTP-Method-Override or a straight PUT if appropriate.
                    dataType: 'json', // Set datatype - affects Accept header
                    url:"clientes/"+$('#cpf').val(), // A valid URL
                    headers: {"X-HTTP-Method-Override": "PUT"}, // X-HTTP-Method-Override set to PUT.
                    data: {
                        clientes:newCliente(),
                    }, // Some data e.g. Valid JSON as a string
                    success: (response) => {
                        console.log(response);
                    }
                });
			}
        });
       consultaCep();
    })();
</script>
@endsection
