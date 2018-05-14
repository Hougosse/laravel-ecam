<template>
    <div>
        <h1>CustomTravels, le site de voyage sur-mesure</h1>
            <br>
            <button type='submit' class='btn btn-primary' v-on:click="afficherForm" v-if='!show'>Créer un voyage</button>
            <button type='submit' class='btn btn-info' v-on:click="retirerForm" v-if='show'>Annuler</button>
            <br>
            <div id='form' v-if='show'>
                <hr>
                <h2>Ajouter ou modifier un voyage</h2>    
                <div class="form-group">
                    <input type='text' class='form-control' placeholder="Nom" v-model="voyage.nom">
                </div>
                <div class="form-group">
                    <textarea class='form-control' placeholder="Description" v-model="voyage.description"></textarea>
                </div>
                <div class='form-group'>
                    <label>Caractéristiques</label> :* 
                    <br>
                    <input type="radio" value="aventurier" v-model="voyage.caracteristiques">Aventurier
                    <br>
                    <input type="radio" value="curieux" v-model="voyage.caracteristiques">Curieux
                    <br>
                    <input type="radio" value="calme" v-model="voyage.caracteristiques">Calme 
                    <br>
                </div>

                <div class='form-group'>
                    <label>Climat</label>:* 
                    <br>
                    <input type="radio" value="tropical" v-model="voyage.climat">Tropical
                    <br>
                    <input type="radio" value="tempéré" v-model="voyage.climat">Tempéré
                    <br>
                    <input type="radio" value="montagneux" v-model="voyage.climat">Montagneux 
                    <br>
                </div>
                
                <div class="btn btn-info" @click="ajouterVoyage">Enregistrer</div>
                </div>
                <hr>
            <h2 class='ml-3'>Voyages</h2>
            <div class='card card-body mb-2' v-for='voyage in voyages' v-bind:key="voyage.id">
                <h3> {{voyage.nom}} </h3>
                <p> {{voyage.description}} </p>
                <hr>
                <div class='row'>
                    <button @click='editerVoyage(voyage)' class='btn btn-warning mb-2 ml-2'>Modifier</button>
                    <button @click='supprimerVoyage(voyage.id)' class='btn btn-danger mb-2 ml-4'>Supprimer</button>
                </div>
            </div>
            <hr>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                voyages: [],
                voyage: {
                    id: '',
                    nom: '',
                    description: '',
                    climat: '',
                    caracteristiques: '',
                    img_presentation: 'document_1525777760.rtf'
                },
                edit: false,
                show: false
            };
        },
    
        created() {
            this.fetchVoyages();
        },
    
        methods: {
            fetchVoyages() {
                let vm = this;
                //this.axios.post('dkdkd', this.voyage);
                this.axios.get('http://localhost:8000/api/voyages').then(res => {
                    this.voyages = res.data;
                });
            },
    
            supprimerVoyage(id) {
                if (confirm('Etes-vous sûr de vouloir supprimer ?')) {
                    this.axios.delete('http://localhost:8000/api/voyages/' + id)
                        .then(data => {
                            alert('Voyage supprimé');
                            this.fetchVoyages();
                        })
                        .catch(err => console.log(err));
                }
    
            },
    
            ajouterVoyage() {
                if (this.edit === false) {
                    //Ajouter
                    this.axios.post('http://localhost:8000/api/voyages', this.voyage);
                    this.voyage.img_presentation= "document_1525777760.rtf";                    
                    alert('Voyage ajouté');
                    this.fetchVoyages();
                }
                    /*axios.post('/formulas/create', {
                        name: "",
                        parts: ""
                    })
                    .then(response => { 
                        console.log(response)
                    })
                    .catch(error => {
                        console.log(error.response)
                    });*/
                    
                    //Mettre à jour la base de données
                else {
                    this.axios.put('http://localhost:8000/api/voyages/'+this.voyage.id, this.voyage);
                    alert('Voyage modifié');
                    this.fetchVoyages();
                    this.edit = false;
                }
            },

            editerVoyage(voyage){
                this.edit = true;
                this.show = true;
                this.voyage = JSON.parse(JSON.stringify(voyage));
                this.voyage.id = voyage.id;
                this.voyage.nom = voyage.nom;
                this.voyage.description = voyage.description;
                this.voyage.climat = voyage.climat;
                this.voyage.caracteristiques = voyage.caracteristiques;
                window.location.replace('#form');
            },

            afficherForm(){
                this.show = true;
            },

            retirerForm(){
                this.show=false;
            }
    
            /*makePagination(meta, links) {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                };
                this.pagination = pagination;
            }*/
        },
    };
</script>