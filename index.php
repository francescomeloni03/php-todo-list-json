<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>


<div id="app">
   
    <div class="bg-dark header">
    <h1 class="text-white">Lista delle cose da fare</h1>
    <button class="btn btn-secondary" @click="getLista">Carica Lista</button>
    </div>

    <ul v-for="list in lista">
       <li>{{ list.ToDo }}: {{ list.Done }}</li>
    </ul>
</div>



    


<script src="./main.js"></script>

</body>
</html>