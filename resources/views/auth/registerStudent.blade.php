@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <div class="row ">
            <div class="col-md-3 mt-4"></div>
    
            <div class="col-md-6 mt-4">
                <div class="card mt">
                    <img src="{{url('asset/img/logo fessef.jpg')}}" class="card-img-top" alt="..." width="1000" height="300">
                    <div class="card-body">
    
    
    
    
                        <!-- section du formulaire -->
                        <form method="POST" action="{{ route('register')}}">
                                        @csrf
                                        <input type="hidden" value="3" name="type">
                                        <div class="form-group row">
                                            <label for="nom"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                            <div class="col-md-6">
                                                <input id="nom" type="text" class="form-control" name="nom" required autocomplete="name"
                                                       autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="prenom"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                                            <div class="col-md-6">
                                                <input id="prenom" type="text" class="form-control" name="prenom" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="telephone"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('telephone') }}</label>

                                            <div class="col-md-6">
                                                <input id="telephone" type="number" class="form-control" name="telephone" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="adresse"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                                            <div class="col-md-6">
                                                <input id="adresse" type="text" class="form-control" name="adresse" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="competences"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('competences') }}</label>

                                            <div class="col-md-6">
                                                <input id="competences" type="text" class="form-control"
                                                       name="competences" required
                                                       autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control"
                                                       name="password" required
                                                       autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="confirmed-password"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirmation mot de passe') }}</label>

                                            <div class="col-md-6">
                                                <input id="confirmed-password" type="password" class="form-control"
                                                       name="confirmed-password" required
                                                       autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                                            <div class="col-md-6">
                                                <textarea id="description" type="text" class="form-control"
                                                          name="description" required
                                                          autocomplete="description" autofocus></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                </div>
    
                <div class="card mt-4">
                    <div class="card-body  text-center">
                        Vous avez déjà un compte ? <a href="{{route('login')}}">Se connecter</a>
                    </div>
                </div>
    
            </div>
    
            <div class="col-md-3 mt-4"></div>
        </div>
    </div>
@stop