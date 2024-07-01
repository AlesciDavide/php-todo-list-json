<?php


?>


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
            <article class="singleTask" v-for="list in todoList">
                <h1>
                    {{ list.task }}
                </h1>
                <p>
                    {{ list.description }}
                </p>
                <span>
                    {{ list.completato }}
                </span>
            </article>
        </section>
    <form action="./addTask.php" method="POST">
        <input type="text" name="task" placeholder="task">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="completato" placeholder="completato">

        <button type="submit">send</button>
    </form>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/script.js"></script>
</body>
</html>