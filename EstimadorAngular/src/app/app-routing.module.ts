import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { InsumoestimacionComponent } from './insumoestimacion/insumoestimacion.component';
import { AddtrabajadorComponent } from './addtrabajador/addtrabajador.component';
import { AddinsumoComponent } from './addinsumo/addinsumo.component';
import { CronogramaComponent } from './cronograma/cronograma.component';
import { LoginComponent } from './login/login.component';
import { RecuperacionComponent } from './recuperacion/recuperacion.component';
import { NuevaContraseniaComponent } from './nueva-contrasenia/nueva-contrasenia.component';
import { DetallesProyectoComponent } from './detalles-proyecto/detalles-proyecto/detalles-proyecto.component';
import { DetallesImplicadosComponent } from './detalles-implicados/detalles-implicados.component';
import { CalibracionUsuarioComponent } from './calibracion-usuario/calibracion-usuario.component';
import { CalibracionComponent } from './calibracion/calibracion.component';
import { CronogramaActividadesComponent } from './cronograma-actividades/cronograma-actividades.component';
import { RegisterComponent } from './register/register.component';


const routes: Routes = [
  {path: 'insumo', component: InsumoestimacionComponent},
  {path: 'addtrabajador', component: AddtrabajadorComponent},
  {path: 'addinsumo', component: AddinsumoComponent},
  {path: 'cronograma', component : CronogramaComponent},
  {path: '', component: LoginComponent},
  {path: 'recuperacion', component: RecuperacionComponent},
  {path: 'nuevacontrasenia', component: NuevaContraseniaComponent},
  {path: 'detalles', component: DetallesProyectoComponent},
  {path: 'detalles-implicados', component: DetallesImplicadosComponent},
  {path: 'calibracion-usuario', component: CalibracionUsuarioComponent},
  { path: 'calibracion', component: CalibracionComponent },
  { path: 'cronogramaActividades', component: CronogramaActividadesComponent },
  { path: 'registro' , component: RegisterComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
