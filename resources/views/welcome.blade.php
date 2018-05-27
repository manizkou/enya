<!doctype html>
<html lang="{{ app()->getLocale() }}">

<title></title>

<body>
    <div id="root">
        <input type="text" id="input" v-model="message">
        <p>The value of the input is: @{{ message }}.</p>
        <input type="text" id="name" v-model="myname">
        <p> Your name is @{{ myname }}.</p>

        <ul>
            <li v-for="name in names" v-text="name">
                {{--@{{name}}--}}
            </li>
        </ul>

        <input type="text" id="addInput" v-model="newName">
        <button @click="addName()">Add Name</button>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <script>

//        var data = {
//            message: 'Hello World'
//        };

//        document.querySelector("#input").value = data.message;

        var app = new Vue({
            el:"#root",
            data:{
                message:'Hello World',
                myname:'Manish',
                newName:'',
                names:['Manish','Joe','Mary','Jane'],
                age:'100'
            },
            methods: {
                addName(){
//                    alert('adding name');
                    if(this.newName!=''){
                        this.names.push(this.newName);
                        this.newName='';
                    }
                }

            }
//            mounted(){
//                alert('all ready');
//                document.querySelector('#addBtn').addEventListener('click', ()=> {
//                    let name = document.querySelector('#addInput');
//                    if(name.value!=''){
//                        app.names.push(name.value);
//                        name.value = '' ;
//                    }
//                });
//            }
        });



    </script>

</body>
</html>
