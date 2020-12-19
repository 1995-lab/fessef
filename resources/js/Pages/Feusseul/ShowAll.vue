<template>
   <!--  <div> -->
        <div class="container-fluid  mb-5 ">
        <div class="row d-flex ">
            <div class="col-md-1"></div>
            <div class="col-md-3 mb-2">
                <div class="card raduis-card mb-2">
                    <div class="card-body bg-danger" style="height : 100px;background-color: #FF0000;"></div>
                    <div class="card-body m-auto">
                          <img
                            :src="'asset/img/figure2.png'"
                            class="rounded-circle shadow-sm" alt="image"
                            width="150" height="150" style="margin-top: -90px;"
                        />
                       <!--  <img :src="'/img/figure2.png'" class="rounded-circle shadow-sm" alt="image"
                            width="150" height="150" style="margin-top: -90px; "> -->
                    </div>
                    <div class="card-body" style="height : 100px;"></div> -
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">
                      <h5 class="card-title"></h5>
                    </li>
                  </ul>
                  <div class="card-body text-center">
                    <a class=" btn btn-warning" href="">Voir Profile</a>
                  </div>
              </div>
    
              <div class="card dCard mb-2" >
                
                 <div class="card-body" style="height : 100px;"></div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">
                            <h5 class="card-title">Document <br> <small class="text-muted">Important</small></h5>
                        </li>
                    </ul>
                    <div class="card-body text-center">
                        <a class=" btn btn-warning mr-2" data-toggle="modal" data-target="#lettreM">
                            Lettre Motivation
                        </a>
                        <a class=" btn btn-warning margin-d" data-toggle="modal" data-target="#cvPdf">
                            Le Cv
                        </a>
                    </div>
                </div>
    
                <!-- modal CV-->
                <div class="modal fade" id="cvPdf" tabindex="-1" aria-labelledby="cvLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cvLabel">Curriculum vitæ de </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
    
                                <iframe src="" width="100%" height="600px">
                                </iframe>
    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin modal CV-->
    
                <!-- modal LM-->
                <div class="modal fade" id="lettreM" tabindex="-1" aria-labelledby="lettreMLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="lettreMLabel">Lettre de motivation de @ </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
    
                                <iframe src="" width="100%" height="600px">
                                </iframe>
    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin modal LM-->
    
    
                <!-- Debut Du Formulaire De Recherche -->
    
                <form action="" class="mt-4">
                    <input type="search" name="search" class="form-control my-1" id="" placeholder="Recherche">
                    <button type="submit" class="btn btn-danger">Recherche</button>
                </form>
    
    
                <!-- Fin Du Formulaire De Recherche -->
    
    
            </div>
    
    
            <div class="col-md-4">
    
                <!-- modal -->
    
                <button type="button" class="btn btn-danger  mb-2" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@mdo">
                    Fesseul
                </button>
    
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Partagez</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <form @submit.prevent="handleSubmit">
                        <div class="form-group">
                            <label for="titre">titre</label>
                            <input class="form-control" id="titre" name="titre" type="text" v-model="form.titre">
                        </div>
                        <div class="form-group">
                            <label for="contenu">Contenu</label>
                            <textarea class="form-control" id="contenu" name="contenu" rows="3"
                                      v-model="form.contenu"></textarea>
                        </div>
                        <div class="form-group">
                            <file-input id="Image/Video" label="Image/Video" v-model="form.file"/>
                        </div>
                        <!-- <button type="submit" class="btn btn-success btn-sm">Submit</button> -->
                    
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Feseul</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
    
                <!-- modal -->
                <div class="card mb-3" id="">
                    <div class="card-header" style="height: 55px; padding : 5px">
                        <img class=""
                            src="" alt="user" width="40px" height="40px">
    
                        <img class="" src=""
                            alt="user" width="40px" height="40px">
    
    
                        <img class=""
                            src="" alt="user" width="40px" height="40px"> -->
    
    
                        <div class="text-muted font-weight-bold dropdown d-inline ml-2"> 
                        </div>
    
                        <a href="#" class="float-right mr-2 " type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="fas fa-ellipsis-h fa-2x mt-2 text-secondary "></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
                            <a class="dropdown-item text-danger  delete" href="" id="">
                                Delete
                            </a>
    
                            <a class="dropdown-item" href="#">
                                Signalez
                            </a>
    
                        </div>
    
                    
                        <p style="margin-top: -32px;"></p> <small class="text-muted ml-5"></small> </p>
                    </div>

                    <img src="" class="" alt="fesseul image">
    
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <p class="text-left ml-2">
                            <a href="" class="float-right mr-2 text-primary" href="">Voir plus...</a>
                        </p>
                    </div>
                </div ></div></div> 
            <div class="col-md-3 ">
                <div class="card mr-4 mb-3 mt-4 d-sm-none">
                    <div class="card-body">
                        <h5 class="card-title text-center"> <b> Annonces </b></h5>
                    </div>
                </div>
    
                <div class="card d-sm-none mr-4 mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="" class="card-img pimg" alt="..."
                                style="width: 100%; height : 100%;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <a class="text-dark" href="">
                                    <h5 class="card-title"></h5>
                                </a>
                                <p class="card-text">
                                    <a class="text-dark" href="">...
                                    </a>
                                </p>
                                <p class="card-text" style="font-size: 13px;">
                                    <small class="text-muted">
                                        Depuis
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
             <div class="col-md-1 d-sm-none ">
        </div>
    
    </div>
    </div>






        <!-- <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div :key="feusseul.id" class="col-md-3" v-for="feusseul in feusseuls">
                        <img
                            v-if="feusseul.extension == 'jpeg'"
                            :src="'/uploads/' +feusseul.file"
                            alt="Card image cap"
                            class="card-img-top"
                            style="height: 200px; width: 254px;"
                        />
                        <div>
                            <video controls v-if="feusseul.extension == 'mp4'" width="320px" height="250px">
                                <source :src="'/uploads/videos/' +feusseul.file" type="video/mp4">
                            </video>
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>{{ feusseul.titre }}</strong>
                            </p>
                            <p>{{ feusseul.contenu | truncate(27) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small style="float: left">
                                    Posté par :
                                    <strong>
                                        {{ feusseul.user.name }}
                                    </strong>
                                </small>
                                <small class="text-muted">
                                    <inertia-link :href="'/Feusseul/Show/'+feusseul.id">
                                        Afficher
                                    </inertia-link
                                    >
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->



    </div>
</template>

<script>
    import FileInput from "../../Shared/FileInput";
    export default {
        name: "showAll",
         components: {
            FileInput
        },
        props: ['feusseuls'],
            data() {
            return {
                form: {
                    titre: null,
                    contenu: null,
                    file: null,
                }
            }
        },
        methods: {
            handleSubmit() {
                const data = new FormData()
                data.append("titre", this.form.titre)
                data.append("contenu", this.form.contenu)
                data.append("file", this.form.file)

                this.$inertia.post('/Feusseul/Store', data,
                    {
                        onSuccess: () => {
                            this.flashMessage.info({
                                message: "Votre Feusseul a ete poste avec success!",
                                time: 5000,
                            });
                        },
                    }
                );
            },
        },
    }
</script>

<style>

</style>
