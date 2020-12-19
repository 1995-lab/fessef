<template>
	<div class="container">
                    <div class="card box-shadow">
                        <img v-if="this.user[0].avatar != null" :src="'/uploads/avatar/'+this.user[0].avatar" alt="" style="width:100%">
                        <img v-else src="/uploads/avatar/avatar.png" alt="" style="width:100%">
                        <inertia-link :href="'/Entreprise/editAvatar/'+this.entreprise[0].user_id">
                            <button class="btn btn-sm btn-dark">modifier avatar</button>
                        </inertia-link>
                        <h1>{{ this.entreprise[0].NomEntreprise }}</h1>
                        <strong>secteur</strong>
                        <p class="title">{{this.entreprise[0].domaineActivites}}</p>
                        <inertia-link :href="this.entreprise[0].lien">{{this.entreprise[0].lien}}</inertia-link>
                        <strong>adresse</strong>
                        <p>{{this.entreprise[0].adresse}}</p>
                        <div style="margin: 24px 0;">

                        </div>
                        <p>
                            <inertia-link :href="'/association/edit/'+this.entreprise[0].user_id">
                                Modifier profil
                            </inertia-link>
                        </p>
                    </div>
	</div>
</template>
<script>
    import Logout from '../../Shared/Logout'

    export default {
        name: "Profil",
        components: {
            Logout
        },
        props: ['entreprise', 'user', 'xamxams', 'annonces'],
    }
</script>