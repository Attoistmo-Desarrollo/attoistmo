import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { LoginComponent } from './login/login.component';
import { NuevaContraseniaComponent } from './nueva-contrasenia/nueva-contrasenia.component';
import { RecuperacionComponent } from './recuperacion/recuperacion.component';

const appRoutes: Routes = [
    { path: '', component: LoginComponent }, 
    { path: 'login', component: LoginComponent },
    { path: 'recuperacion', component: RecuperacionComponent },
    { path: 'nuevacontrasenia', component: NuevaContraseniaComponent },
    ];

export const appRoutingProviders: any[] = [];
export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);