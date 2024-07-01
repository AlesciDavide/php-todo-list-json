<?php ?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>php-todolist-json</title>
</head>
<body>
<main id="app">
        <section class="task" >
            <article class="singleTask" v-for="(list, index) in todoList">
                <h1>
                    {{ list.task }}
                </h1>
                <p>
                    {{ list.description }}
                </p>
                <span class="actionTask" >
                    <form action="./removeTask.php" method="POST">
                        <label for="delete">Eliminare la task?</label>
                        <select name="delete" id="delete">
                        <option value="no">no</option>
                        <option :value="index">yes</option>
                        </select>
                        <button class="RemoveButton" type="submit">x</button>
                    </form>

                </span>
            </article>
        </section>
        <section class="sendTask">
            <form class="formTask" action="./addTask.php" method="POST">
                <div>
                    <label for="task">Inserisci nome della Task (Obbligatorio):</label>
                    <input type="text" name="task" placeholder="Inserisci nome Task..." >
                </div>
                <div>
                    <label for="description">Inserisci descrizione Task (facoltativo):</label>
                    <input type="text" name="description" placeholder="Descrizione..." >
                </div>
                <div>
                    <label for="completato">Inserisci se è completato:</label>
                    <input type="text" name="completato" placeholder="completato" >

                </div>
                <button class="addTaskButton" type="submit">Send</button>
            </form>

        </section>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/script.js"></script>
</body>
</html>