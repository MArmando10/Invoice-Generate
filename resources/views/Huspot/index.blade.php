<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    
    <title>HubSpot Invoice Generator</title>
</head>


<body>
    <!--Empieza navegacion-->
    <div class="row " style="-webkit-box-shadow: 0.2px 0.2px 15px; padding-top: 10px">
        <nav class="nav justify-content-between" style="padding-left: 30%">
        
            <a class="nav-link active dropdown-toggle " aria-current="page" href="#">Idioma</a>
            <a class="nav-link" href="#">Comuniquese con Ventas</a>
            
                        <ol class="breadcrumb " >
                        <a class="nav-link" href="{{route('login')}}">Iniciar sesión</a>
                            <a class="nav-link" href="#">Atención al cliente</a>
                        </ol>
                  
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Acerca de 
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item " type="button">Idioma</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                            
                        </div>
                   
        </nav>

        <p></p>
    
    </div>

   
   
     <!-- crear contenido para usuario -->
    <div class="row" style="-webkit-box-shadow: 0.2px 0.2px 15px; padding-top: 10px">
        <div class="col-sm-12">
            <section class="hsg-promo-bar" data-background="dark" style="text-align: center; padding: 1.25rem 0">
                <div class="col" style="align-items:center; justify-content:center;">
                    <h1 style="text-align: center">
                    <font style"vertical-align: inherit;">Generador de plantillas de facturas</font> 
                    </h1>
                </div>  
                <div class="col" style="padding-top: 10px">
                    <h5 style="font-size: medium;font-weight: 700;">
                        <font style"vertical-align: inherit;>Complete los detalles de su empresa en la plantilla de factura a continuación para crear una factura profesional para sus clientes.</font>
                    </h5>
                </div>
            </section> 
        </div>   
    </div>
<style>
    .conteiner{
        background-color: rgb(242, 245, 248);
        justify-content: center;
    }
    .jTpVbZ{
    display: contents;
    width: 60%;
    height: 60%;
    }
    .h2{
        vertical-align: inherit;
    }
    .jOUQgp {
    width: 100%;
    font-size: 1.2em;
    font-weight: 600;
    text-align: left;
    color: rgb(45,62,80);
    outline: none;
    border: 1px dashed transparent;
    background-color: transparent;
    overflow: visible;

    width: 100%;
    display: flex;
    -webkit-box-pack: start;
    justify-content: flex-start;
    }
    .bsMKUp{
        width: 100%;
    font-size: 0.9em;
    text-align: left;
    color: rgb(45, 62, 80);
    outline: none;
    border: 1px dashed transparent;
    background-color: transparent;
    overflow: visible;
    }
    .cQfcms{
        position: relative;
    width: 60%;
    max-width: 60%;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    margin-left: auto;
    overflow: hidden;
    border: 2px dashed rgb(253, 143, 95);
    transform: scale(1);
    transition: transform 0.3s ease 0s;
    }
    .dGXtwg{
        width: 100%;
    font-size: 1.2em;
    font-weight: 600;
    text-align: left;
    color: rgb(239, 59, 73);
    outline: none;
    border: 1px dashed transparent;
    background-color: transparent;
    overflow: visible;
    }
    .hRkuTP{
    width: 90%;
    display: flex;
    flex-direction: column;
    -webkit-box-flex: 1;
    flex-grow: 1;
    padding: 1em;
    border: 1px solid rgb(66, 91, 118);
    border-radius: 0.5em;
    margin: 15px 0 0 0;
    }
    .jwSTYE{
    bottom: 0px;
    right: 0px;
    padding: 1em 2em;
    transform: translateY(15%);
    background-color: darkorange; 
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    border: none;
    color: white;
    margin: 4px 2px;
    transition-duration: 0.4s;
    }
</style>
    <!--comenzamos contenedor de factura-->
        <div class="row conteiner" >
            <div class=" jTpVbZ " >
                <img src="//cdn2.hubspot.net/hubfs/53/invoice%20generator/toolset.svg" class="rounded-circle" style="background-color: darkorange; height: 65px; border-radius: 20px; padding: 10px;">
            </div>

            <div class=" col-md-6 col-6" style="padding: 25px" >
                    <div class="card" style="-webkit-box-shadow: 0.2px 0.2px 15px; padding: 10px ">
                        <div class="card-body" >
                   
                        <!--Empieza formulario-->
                            <div class="form-group ">
                                <h2 class="h2">Factura</h2>
                                 {{ csrf_field() }} <!--metrodo para que identifique el formulario-->
                                        
                                        <!--creamos opcion foprm para cargar imagen-->
                                        <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data" >
                                            <div class="col-md-12 cQfcms">
                                                <span>
                                                    <font>
                                                        Arrastre y suelte un archivo de logotipo o haga clic para cargar
                                                    </font>
                                                </span>
                                                <input type="file" name="archivo" style="whith:15px" required>
                                            </div>
                                        </form>

                                    <div class="form-row bsMKUp">
                                        <div class="form-group col-md-8 dGXtwg">
                                            <input type="text" id="txtCompania" class="form-control jOUQgp" value="{{old('Compania')}}" name="Tu compañia" placeholder="Tu compañía*"  required   onKeyPress="return soloLetras(event)" >
                                            <p class="inputError">{{ $errors->first('Compania') }}</p>
                                      
                                        </div>
                                       
                                        <div class="form-group col-md-8 bsMKUp">
                                            <input type="text" id="txtnombre" class="form-control jOUQgp" value="{{old('nombre')}}" name="Tu nombre/s" placeholder="Tu nombre y apellido"  required   onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);">
                                            <p class="inputError">{{ $errors->first('nombreApellido') }}</p>
                                        </div>
                                        
                                        <div class="col-md-8 bsMKUp">
                                            <input type="text" id="txtpagEmpresa" class="form-control jOUQgp" value="{{old('pagEmpresa')}}" name="Pagina Web de la empresa" placeholder="Pagina web de la compañia"  required   onKeyPress="return soloLetras(event)">
                                            <p class="inputError">{{ $errors->first('pagEmpresa') }}</p>
                                        </div>

                                        <div class="col-md-8 bsMKUp">
                                            <input type="text" id="txtDireccionEmpresa" class="form-control jOUQgp" value="{{old('DireccionEmpresa')}}" name="Dirección de la empresa" placeholder="Dirección de la empresa"     onKeyPress="return soloLetras(event)" >
                                            <p class="inputError">{{ $errors->first('DireccionEmpresa') }}</p>
                                        </div>

                                        <div class="col-md-8 bsMKUp">
                                            <input type="text" id="txtCodigoPostal" class="form-control jOUQgp" value="{{old('CodigoPostal')}}" name="CodigoPostal" placeholder="Codigo Postal"     onKeyPress="return soloLetras(event)" onkeyup="soloNumeros(this);">
                                            <p class="inputError">{{ $errors->first('CodigoPostal') }}</p>
                                        </div>

                                        <div class="col-md-8 bsMKUp">
                                            <input type="text" id="txtPaís" class="form-control jOUQgp" value="{{old('País')}}" name="País" placeholder="País"     onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);">
                                            <p class="inputError">{{ $errors->first('País') }}</p>
                                        </div>

                                        <div class="col-md-8 bsMKUp">
                                            <input type="text" id="txtNoTelefono" class="form-control jOUQgp" value="{{old('NoTelefono')}}" name="NoTelefono" placeholder="Telefono No."  required   onKeyPress="return soloLetras(event)" onkeyup="soloNumeros(this);">
                                            <p class="inputError">{{ $errors->first('NoTelefono') }}</p>
                                        </div>

                                        <div class="col-md-8 bsMKUp">
                                            <input type="text" id="txtEmail" class="form-control jOUQgp" value="{{old('Email')}}" name=Email" placeholder="Dirección de correo electronico"  required   onKeyPress="return soloLetras(event)" >
                                            <p class="inputError">{{ $errors->first('Email') }}</p>
                                        </div>


                                        <div class="form-group col-md-8 dGXtwg">
                                            <input type="text" id="txtCompania" class="form-control jOUQgp" value="{{old('Compania')}}" name="Tu compañia" placeholder="Empresa del cliente"  required   onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);">
                                            <p class="inputError">{{ $errors->first('Compania') }}</p>
                                        </div>

                                        <div class="form-group col-md-8 ">
                                            <input type="text" id="txtCompania" class="form-control jOUQgp" value="{{old('Compania')}}" name="Tu compañia" placeholder="Nombre del cliente*"  required   onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);">
                                            <p class="inputError">{{ $errors->first('Compania') }}</p>
                                        </div>

                                        <div class="form-group col-md-8 ">
                                            <input type="text" id="txtDireccionCliente" class="form-control jOUQgp" value="{{old('DireccionCliente')}}" name="DireccionCliente" placeholder="Dirección del cliente*"     onKeyPress="return soloLetras(event)" >
                                            <p class="inputError">{{ $errors->first('DireccionCliente') }}</p>
                                        </div>

                                        <div class="form-group col-md-8 ">
                                            <input type="text" id="txtNombreCliente" class="form-control jOUQgp" value="{{old('NombreCliente')}}" name="NombreCliente" placeholder="Nombre del cliente"  onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);">
                                            <p class="inputError">{{ $errors->first('NombreCliente') }}</p>
                                        </div>

                                        <div class="col-md-6 bsMKUp">
                                            <input type="text" id="txtCodigoPostalCliente" class="form-control jOUQgp" value="{{old('CodigoPostalCliente')}}" name="CodigoPostalCliente" placeholder="Codigo Postal" onKeyPress="return soloLetras(event)" onkeyup="soloNumeros(this);">
                                            <p class="inputError">{{ $errors->first('CodigoPostalCliente') }}</p>
                                        </div>

                                        <div class="col-md-8 bsMKUp">
                                            <input type="text" id="txtPaísCliente" class="form-control jOUQgp" value="{{old('PaísCliente')}}" name="PaísCliente" placeholder="País"  onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);">
                                            <p class="inputError">{{ $errors->first('PaísCliente') }}</p>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table border="1" class="table" id="tablaprueba">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>ID<p class="inputError">{{ $errors->first('ID[]') }}</p></th>
                                                    <th>Descripción<p class="inputError">{{ $errors->first('Descripcion[]') }}</p></th>
                                                    <th>Quantify<p class="inputError">{{ $errors->first('Quantity[]') }}</p></th>
                                                    <th>Price<p class="inputError">{{ $errors->first('Precio[]') }}</p></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @if(old('empresa') )
                                                        <?php $tamanio = sizeof(old('empresa'));?>
                                                        @for ($i=0; $i < $tamanio; $i++)
                                                        <tr>
                                                        <td>  <input type="text" id="txtEmpresa" class="form-control" name="empresa[]" placeholder="Ingresa nombre de la empresa" value="{{old('empresa.'.$i)}}"  required   onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);"></td>
                                                            <td><input type="text" id="txtMonto" class="form-control" name="monto[]" placeholder="Ingresa el monto $ " value="{{old('monto.'.$i)}}" required  onKeyPress="return soloNumeros(event)" onkeyup="soloNumeros(this);"></td>
                                                        </tr>
                                                        @endfor
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="form-group">
                                            <button type="button" class="btn btn-info mr-2" id="btn1" onclick="agregarFila(this.id)"><i class="fas fa-plus"></i> Agregar Fila</button>
                                            <button type="button" class="btn btn-danger" onclick="eliminarFila()"><i class="fas fa-minus"></i> Eliminar Fila</button>
                                        </div>

                                        <div class=" row ">
                                            <div class="col hRkuTP">
                                                <textarea name="textarea" rows="10" cols="50">Write something here</textarea> 
                                            </div>  
                                            
                                            <div class="col">
                                            <td><input type="text" id="txtSubTotal" class="form-control jOUQgp" value="{{old('SubTotal')}}" name="SubTotal" placeholder="SubTotal:"  onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);">
                                            <p class="inputError">{{ $errors->first('SubTotal') }}</p> </td>
   
                                            <input type="text" id="txtImpuesto" class="form-control jOUQgp" value="{{old('Impuesto')}}" name="Impuesto" placeholder="Impuesto:"  onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);">
                                            <p class="inputError">{{ $errors->first('Impuesto') }}</p>

                                            <input type="text" id="txtDescuento" class="form-control jOUQgp" value="{{old('Descuento')}}" name="Descuento" placeholder="Descuento:"  onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);">
                                            <p class="inputError">{{ $errors->first('Descuento') }}</p>
                                            </div>  
                                            
                                            <div class="col-md-6 bsMKUp">
                                                <font>
                                                    <font>
                                                        <strong>Esta factura fue creada usando HubSpot
                                                            <a href="https://www.hubspot.com/invoice-template-generator"></a>
                                                    </font>
                                                    
                                                    <font style="color: darkcyan;">
                                                        Generador de plantillas de facturas
                                                    </font>
                                                        </strong>
                                                </font>
                                            </div> 
                                            <div class="d-flex justify-content-between  mb-8">
                                                <a class="" role="button" href=""><i class="fas fa-arrow-left"></i> </a>
                                                <button type="submit" class="btn  jwSTYE border-radius:12px "><i class="fas fa-save" id="btnComprobar" }}"></i> Descargar ahora</button>
                                            </div>   
                                        
                                        </div>
                                              

                                    </div>  
                            </div>
                        </div>  
                    </div>  
            </div>          
        </div>

        <script>
            function agregarFila(btn)
            {
                //alert(btn);
                if(btn1)
                {
                    document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td>  <input type="text" id="txtID" class="form-control" name="ID[]" placeholder="ID" onKeyPress="return soloLetras(event)" onkeyup="soloLetras(this);"></td>     <td><input type="text" id="txtDescripción" class="form-control" name="Descripción[]" placeholder="Descripción "  onKeyPress="return soloNumeros(event)" onkeyup="soloNumeros(this);"></td>    </td><td><input type="text" id="txtCalcular" class="form-control" name="Calcular[]" placeholder="Calcular "  onKeyPress="return soloNumeros(event)" onkeyup="soloNumeros(this);"></td></td>    <td><input type="text" id="txtPrecio" class="form-control" name="Precio[]" placeholder="Precio"  onKeyPress="return soloNumeros(event)" onkeyup="soloNumeros(this);"></td></td>';
                }
            }

            function eliminarFila()
            {
                var table = document.getElementById("tablaprueba");
                var rowCount = tablaprueba.rows.length;

                if(rowCount <= 1)

                    Swal.fire({
                    title: 'Atención !',
                    text: 'No hay mas elementos por borrar',
                    type: 'error',
                    confirmButtonText: 'Enterado'
                });

                else
                    tablaprueba.deleteRow(rowCount -1);
            }
        </script>

        <style>
        .parr{ 
            /*estilo para parrafo*/
            text-align: center;
            padding: 0 400px 0 400px;
        }  
        </style>
   
       <br><br>
        	
        <div class="row col-md-12"> 
           
            <div class="col-md-12">
                <h4 class="h4 hsg-promo-bar" data-background="dark" style="text-align: center; padding: 1.25rem 0">
                    <span>
                        <font style="align-items:center; justify-content:center;">Cómo utilizar el generador de plantillas de facturas gratuito</font>
                    </span>
                </h4>
            </div>
                 <p class="parr col-md-12">
                    <font style"vertical-align: inherit; >
                    Utilice este generador de facturas gratuito para crear y descargar facturas profesionales para enviar a sus clientes. 
                    Comience por completar los detalles de su empresa en la plantilla de factura a continuación para completar el estado de cuenta. 
                    Puede agregar líneas de pedido adicionales haciendo clic en el botón "+ Agregar más". 
                    <span> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;"> Cuando haya terminado con los detalles, haga clic en el icono de herramientas a la izquierda para personalizar su combinación de colores. 
                    Cuando termine, haga clic en el botón </font>   </font>  </span> 
                    <p style="text-align:center"> "Descargar ahora" para descargar el PDF de la factura. </p> 
                    </font>
                </p>

                <p class="parr col-md-12">
                    <span>
                        <font>
                        Una vez que haya descargado la factura, envíela a sus clientes por correo electrónico o imprímala y envíela directamente.
                        </font>
                    </span>
                </p>

                <h4 class="parr">
                    <span style="font-weight: 400; font-size: 18px;">
                        <strong>
                            <font style="vertical-align: inherit;">
                            ¿Busca más plantillas de facturas en blanco para elegir?
                            </font>
                        </strong>
                    </span>
                </h4>

                <p class="parr" style="text-align: center;">
                    <span style="font-weight: 400;"> 
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Hemos creado 10 
                            </font>
                        
                        </font>
                    </span>
                    <span style="font-weight: 400;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                plantillas de facturas gratuitas 
                            </font>
                        </font>
                    </span>
                    <span style="font-weight: 400;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                para Microsoft Word para satisfacer todas sus necesidades de facturación. 
                            </font>
                        </font>
                    </span>
                    <span style="font-weight: 400;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                            Simplemente complete el formulario a continuación para acceder a las plantillas. 
                            </font>
                            <font style="vertical-align: inherit;">
                            Las plantillas son totalmente editables y se pueden descargar como PDF para enviarlas a sus clientes. 
                            </font>
                        </font>
                    </span>
                </p>
        </div>
        <br><br><br>
      


           
           
    </div>
            
</body>
</html>