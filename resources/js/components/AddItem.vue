<template>
    <div class="card">
        <div class="card-header">Vue Axios POST </div>
        <div class="card-body">
            <div class="form-group ">
                <input  v-model="post.name" type="text" class="form-control  "  placeholder="Name" />
            </div>
            <div class="form-group">
                <input   v-model="post.contact" type="text" class="form-control"  placeholder="Contact" />
            </div>
            <div class="form-group ">
                <input   v-model="post.text" type="text" class="form-control  "  placeholder="Text" />
            </div>
            <div class="form-group ">
                {{likes}}
                <input   v-model="post.img" type="text" class="form-control  "  placeholder="img" />
            </div>
            <button class="btn btn-sm btn-primary  " @click="createPost">Post Data</button>
            <button class="btn btn-sm btn-warning " @click="postData">Clear</button>

        </div>
    </div>
</template>

<script>
import axios from "axios";

//let token = document.head.querySelector('meta[name="csrf-token"]');
let token  = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token;

export default {
    data() {
        return{
            likes: 0,
            post: {
                name: '',
                contact: '',
                text: '',
                img: ''
            }
        }
    },
    methods: {
        postData() {
            this.likes += 1;
            alert(token)
        },
        async createPost(){
            try{
                const { data } = await axios.post(
                    "//http://listingo.loc/additem",
                    {
                        name: this.post.name,
                        contact: this.post.contact,
                        text: this.post.text,
                        img: this.post.img
                    },
                    {
                        headers: {
                            "content-type": "text/json",
                        }
                    }
                );
                this.post = data;
            } catch (error) {
                console.log(error);
            }
        }
    }
}
</script>
