@extends('layouts.app')

<script src="/bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
<script src="/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



@section('content')

@switch(Auth::user()->rol)

    @case('Aspirante')

    <h1>

      Espera a que te den de alta

    </h1>
    @break
    @case( 'Jefe' )
     
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">  
        <h1>
          Tablero - Jefe de laboratorio
        </h1>
      </div>
     
      

      
   



      <div class="container">
        <a class="nav-link btn btn-primary form-control" href="/Proyectos">Proyectos</a>

        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4>
                <a href="/Usuarios" style="color:black">Lista de Usuarios</a>
              </h4>
              
            </div>
            <div class="card-body">
            
              <table class="table table-hover"  text-center="">
                <thead>
                  <tr>
                    <th colspan="5"  >Lista</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @forelse ($usuarios as $usuario)
                  <tr class="table table-sm table-bordered" >
                  
                    <td scope="row">{{$usuario->nombre}}</th>
                    
                  </tr>
                
                  @empty
                  <tr>
                      <td colspan="3">Sin usuarios registrados</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4>
                <a href="/Horarios" style="color:black">Lista de Horarios</a>
              </h4>
            </div>
            <div class="card-body">
              <div class="container">
                <table class="table table-hover table-bordered"  id="tbl-horario" >
                  <thead>
                    <tr class="table table-sm table-bordered" >        
                      <th scope="row"class="bg-success ">H</th>
                      <th scope="row"class="bg-success">L</th>
                      <th scope="row"class="bg-success">M</th>
                      <th scope="row"class="bg-success">Mi</th>
                      <th scope="row"class="bg-success">J</th>
                      <th scope="row"class="bg-success">V</th>
                    </tr>        
                  </thead>
                  <tbody>
                    <tr aria-hora ="8">
                      <th>08</th>
                      <td data-id="${registro.id}"></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr aria-hora ="9" >
                      <th>09</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr aria-hora ="10">
                      <th>10</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="table table-sm table-bordered" > 
                      <th >11</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                  
                    <tr class="table table-sm table-bordered" > 
                      <th >121  </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                  
                    <tr class="table table-sm table-bordered" > 
                      <th >12  </th>
                        <td>X</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                  
                    <tr class="table table-sm table-bordered" > 
                      <th  >34  </th>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                    </tr>
                    <tr class="table table-sm table-bordered" > 
                      <th  >45  </th>
                        <td></td>
                        <td>X</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="table table-sm table-bordered" > 
                      <td  > 56  </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="table table-sm table-bordered" > 
                      <th  >67  </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="table table-sm table-bordered" > 
                      <th  >78  </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="table table-sm table-bordered" > 
                      <th >89  </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>     
                  </tbody>
                </table>
              
              </div>
        
              
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4>
                <a href="/Proyectos" style="color:black">Lista de Proyectos</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-hover"  text-center="">
                <thead>
                  <tr>
                    <th colspan="5"  >Lista</th>
                  </tr>
                </thead>
                <tbody>
                
                  @forelse ($proyectos as $proyectos)
                  <tr class="table table-sm table-bordered" >
                  
                    <td scope="row">{{$proyectos->nombre}}</th>
                    
                  </tr>
                
                  @empty
                  <tr>
                      <td colspan="3">Sin proyectos registrados</td>
                  </tr>
                  @endforelse
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Avance de Proyecto 1</h4>
            </div>
          
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Avance de Proyecto 2</h4>
            </div>
            
          </div>
        
        </div>
      </div>
    @break
    @case('Auxiliar')
    <HEAder class="container-fluid">
      <div class="row">
         <div class="col-12 align-self-center text-center">
            <h1>
              Tablero - Auxiliar
            </h1>
            
           
         </div>
      </div>
     </HEAder>

    <div class="container">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">
            
          </h4>
        </div>
        <div class="card-body">
             
          <div>
            <table class="table table-hover"   >
              <thead>
                <th scope="row" class="bg-success text-center">Proyecto</th>
                  <th scope="row" class="bg-success text-center">Prestador</th>
                  <th scope="row" class="bg-success text-center">Acciones</th>
              </thead>
              <tbody>
                @forelse ($proyectos as $proyectos)
                <tr> @if($proyectos->nombre)
                
                @endif
                
                    <td class="text-center">{{ $proyectos->nombre }}</td>
                    <td class="text-center">usuario </td>
                    
                   
                  
                    
                    <td class="text-center">
                        <a href="/Historicos" class="btn btn-info tect-center">Historico</a>
                        <a href="/Historicos/create" class="btn btn-warning">Control de Asistencias</a> 
                     
                </tr>
            @empty
                <tr>
                    <td colspan="3">Sin proyectos registrados</td>
                </tr>
            @endforelse
              </tbody>
            </table>
           
          </div>
         
      </div>


    </div>
    @break
    @case('Externo')
    <h1>
      Tablero - Externo
    </h1>
    <br>
  <h2>
   Horario del laboratorio
  </h2>
  
  
        @break
    @case('Prestador')
    <div class="card-columns">
      <div class="card">
        <h1>
             Estatus del proyecto - Prestador
        </h1>
        <br>
        <h2>
             Avance del proyecto
        </h2>
      </div>
    </div>
      @break

@endswitch



@endsection
