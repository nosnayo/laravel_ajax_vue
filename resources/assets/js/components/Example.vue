<template>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Selects Dependientes con vue.js + select2 + Laravel</div>
                
                <div class="panel-body">
                    <div class="form-group">
                        <label for="" class="col-md-3">
                            Pais(Country):
                        </label>
                        <div class="col-md-9">
                            <select2 :options="countries" v-model="Country" @input="getStates">
                                
                            </select2>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-3">
                            Estados(State):
                        </label>
                        <div class="col-md-9">
                            <select2 :options="states" v-model="State">
                                
                            </select2>
                        </div>
                    </div>
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
import VueAxios from 'vue-axios';

Vue.use(VueAxios, axios);
export default {
    mounted() {
        
        Vue.axios.get('GetCountries')
        .then((response)=>{
            this.countries = response.data;    
        })
    },
    data: function(){
        return {
            Country: '0',
            State: '0',
            countries:[],
            states : [],
        }
    },
    methods:
    {
        getStates()
        {
            
                Vue.axios.get('GetStates/'+this.Country)
                .then((response)=>{
                    this.states = response.data;  
                })   
            
            
        }
    }
}
</script>