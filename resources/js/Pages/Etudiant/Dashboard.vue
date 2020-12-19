<template>
    <div style="margin-top: 0;">
              <img :src="'asset/img/fessef4.jpg'" style="width: 100%;height: 200px;margin-top:0">
      <!--       <div class="row ">
            <div class="col-md-12 m-auto">
                   <div class="card shadow-sm  mb-4" style="height: 90px;">
                    <div class="ml-4">
                        <img :src="'asset/img/profile_default.jpg'" class=" img-thumbnail shadow-sm text-left ml-4"
                            alt="image" width="70" height="50" style="margin-top: 40px; border:solid 5px #fff; ">
                        <a :href="''" class="btn btn-sm mt-4"
                            style="margin-right: 50px; float: right; background-color: #3563a9; color:#fff;">Mise à jour</a>
                    </div>
                </div>
            </div>
          </div> -->
        <div class="container">
             <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card" >
                        <img v-if="this.user[0].avatar != null" :src="'/uploads/avatar/'+this.user[0].avatar" alt="" style="width:100%">
                        <img v-else src="/uploads/avatar/avatar.png" alt="" style="width:100%">
                        <inertia-link :href="'/Etudiant/editAvatar/'+this.etudiant[0].user_id">
                            <button class="btn btn-sm btn-dark">modifier avatar</button>
                        </inertia-link>
                        <h1>{{ this.etudiant[0].nom }} {{this.etudiant[0].prenom}}</h1>
                        <strong>Adresse</strong>
                        <p>{{this.etudiant[0].adresse}}</p>
                        <strong>Competences</strong>
                        <p>{{ this.etudiant[0].competences }}</p>
                        <strong>Description</strong> 
                       <!-- <p>{{this.competences[0].description}}</p> -->
                        <div style="margin: 24px 0;">

                        </div>
                        <p>
                            <inertia-link :href="'/etudiant/edit/'+this.etudiant[0].user_id">
                                Modifier profil
                            </inertia-link>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                             <img class="rounded-circle border border-warning d-inline"
                                    :src="'asset/img/avatar1.jpg'" alt="user" width="40px" height="40px" style="float:left;">
                                <div class="text-muted font-weight-bold dropdown d-inline ml-2"></div>
                                <a :href="''" class="float-right mr-2 " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-ellipsis-h mt-3 text-secondary "></i></a>
                                <!-- debut du list dropdown -->
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item text-danger  delete" :href="''"
                                        id="">Delete</a>
                                    <a class="dropdown-item" :href="''">Signalez</a>
                                </div>
        
                                <!-- fin du list -->
                                <p style="margin-top: -32px;"></p> <small class="text-muted ml-5"></small> </p>
                                <hr>
                         <img :src="'asset/img/figure2.png'" width="270" height="200">
                         <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Iusto blanditiis nisi, qui dolorum facilis ipsum corporis velit id porro doloremque architecto voluptatem, fuga? Aperiam error quos molestias, nam repudiandae omnis totam explicabo dicta commodi repellendus dolore provident quis, ullam voluptas amet, cum sequi praesentium perferendis perspiciatis atque iusto possimus rerum.</p>
                         <inertia-link>4 novembre</inertia-link>
                          <inertia-link :href="''" class="card-link">voir plus...</inertia-link>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="card mr-4 ml-2 mb-3">
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fa fa-binoculars " aria-hidden="true" style="font-size: 40px; color: #3563a9;" s></i>
                        </div>
                    </div>
                    </div>
            <div :key="annonce.id" class="card mb-3" v-for="annonce in annonces">
                <div class="card ml-2 mr-4 mb-3 ">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img :src="'uploads/'+annonce.image" alt="" class="card-img img-fluid pimg" height="300" width="100">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-text"><small class="text-muted">{{annonce.titre}}</small></h6>
                                <p>{{annonce.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
 </div>
</template>

<script>
    import Logout from '../../Shared/Logout'
    export default {
        name: "Dashboard",
        components: {
            Logout
        },
        props:['etudiant', 'user','xamxams', 'annonces'],
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
