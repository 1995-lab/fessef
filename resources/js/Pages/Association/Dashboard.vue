<template>
    <div>
<div class="container">   
    <div class="row">
    <div class="col-md-9">
          <div class="card mb-3">
                        <div id="container-img" w=500>
                            <img :src="'asset/img/fessef1.jpg'" class="card-img-top img-fluid" alt="">
                        </div>
                        <p class="text-center">
                            <img :src="'asset/img/fessef4.jpg'" alt="image" width="100" height="100"
                                class="shadow-sm img_associ">
        
                        </p>
                        <div class="card-body body-card">
                            <h5 class="card-title">ousmanetra</h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                        </div>
        
                        <div class="card-footer text-muted ">
        
                            <ul class="nav nav-tabs " id="pills-tab" role="tablist">
                                <li class="nav-item " role="presentation">
                                    <a class="nav-link text-primary active" id="pills-home-tab" data-toggle="pill"
                                        :href="'#pills-home'" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-binoculars"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V2.5zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5h-1zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V4zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V3zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item " role="presentation">
                                    <a class="nav-link text-primary" id="pills-contact-tab" data-toggle="pill"
                                        :href="'#pills-contact'" role="tab" aria-controls="pills-contact" aria-selected="false">
                                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item " role="presentation">
                                    <a class="nav-link text-primary" id="pills-profile-tab" data-toggle="pill"
                                        :href="'#pills-profile'" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bookmark-check"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                            <path fill-rule="evenodd"
                                                d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
        
                        </div>
                    </div>
    </div>
    <div class="col-md-3">
                     <form class="form-inline my-3">
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <input type="search" name="search" class="form-control " id="" placeholder="Recherche Profiles">
                            </div>
                            <div class="form-group col-md-4">
                                <button type="submit" class="btn"
                                    style="background-color: #3563a9; color:#fff;">Recherche</button>
                            </div>
                        </div>
                    </form>
                    <div class="card mb-1">
                        <div class="card-header text-center ">
                            <p class="PTextHeader"> Plus d'infos sur la page</p>
                        </div>
        
                        <ul class="list-group list-group-flush text-left">
                            <li class="list-group-item ">
                                <b> </b>
        
                                Veillez remplir votre numero de telephone
        
                            </li>
                            <li class="list-group-item">
                                <b></b>
        
                                Veillez remplir votre domaine d'activite
        
                            </li>
                            <li class="list-group-item">
                                
        
                                Veillez remplir Votre adresse
        
                            </li>
                            <li class="list-group-item">
                                <b></b>
                                <a :href="'https://www.{{user.association.site_web}}'"
                                    target="_blank"></a>
        
                                Veillez remplir l'adresse de votre site web
                                
                            </li>
        
                        </ul>
        
                        <div class="card-body">
        
                            Veillez decrire votre association
        
                        </div>
        
                        <div class="card-footer text-muted text-center">
                            <a :href="'asset/association/updatepages.html'" class="btn-sm" style="background-color: #3563a9; color:#fff;">
                                Mise à jour
                            </a>
                        </div>
                    </div>
        
                    <!-- Debut du deuxieme card pour creer des posts -->
                    <div class="card ">
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">
                                <a :href="'../etpse/editpage.html'" class="text-dark">
                                    Ajoutez une annonce
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a :href="'../xamxam/addxamxam.html'" class="text-dark">
                                    Xamleul
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Fin du deuxieme card pour creer des posts -->
        
        
                    <!-- Fin du section à 3 col  -->
        
        
                </div>

    </div>
    </div>

</div>



        <!--            <inertia-link :href="'/association/edit/'+this.association[0].user_id">Modifier profil</inertia-link>-->
      <!--   <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img v-if="this.user[0].avatar != null" :src="'/uploads/avatar/'+this.user[0].avatar" alt="" style="width:100%">
                        <img v-else src="/uploads/avatar/avatar.png" alt="" style="width:100%">
                        <inertia-link :href="'/Association/editAvatar/'+this.association[0].user_id">
                            <button class="btn btn-sm btn-dark">modifier avatar</button>
                        </inertia-link>
                        <h1>{{ this.association[0].NomAssociation }}</h1>
                        <strong>secteur</strong>
                        <p class="title">{{this.association[0].domaineActivites}}</p>
                        <inertia-link :href="this.association[0].lien">{{this.association[0].lien}}</inertia-link>
                        <strong>adresse</strong>
                        <p>{{this.association[0].adresse}}</p>
                        <div style="margin: 24px 0;">

                        </div>
                        <p>
                            <inertia-link :href="'/association/edit/'+this.association[0].user_id">
                                Modifier profil
                            </inertia-link>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1>Last xamxam poster</h1>
                    <div :key="xamxam.id" class="card mb-3" v-for="xamxam in xamxams">
                        <img :src="'uploads/'+xamxam.image" alt="" class="card-img-top" height="180px" width="733px">
                        <div class="card-body">
                            <h5 class="card-title">{{xamxam.titre}}</h5>
                            <h5 class="card-title">{{xamxam.tags}}</h5>
                            <p class="card-text">{{xamxam.contenu | truncate(27) }}</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1>Last annonce poster</h1>
                    <div :key="annonce.id" class="card mb-3" v-for="annonce in annonces">
                        <img :src="'uploads/'+annonce.image" alt="" class="card-img-top" height="180px" width="733px">
                        <div class="card-body">
                            <h5 class="card-title">{{annonce.titre}}</h5>
                            <h5 class="card-title">{{annonce.description | truncate(27) }}</h5>
                            <p class="card-text">{{annonce.contenu | truncate(27) }}</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</template>

<script>
    export default {
        name: "Dashboard",
        components: {},
        props: ['association', 'user', 'xamxams', 'annonces', 'messages'],
    }
</script>

<style scoped>
    h1 {

        margin-left: 20px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin-left: 20px;
        text-align: center;
        font-family: arial, cursive;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover, a:hover {
        opacity: 0.7;
    }

</style>
