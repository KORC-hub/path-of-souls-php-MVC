<main>  
    <div class="presentacion Code">
        <div>Code :</div>
        <div><span>Kevin Rogers</span></div>
    </div>
    <div class="content">
        <div class="one">
            <h2>Estados del juego</h2>
            <p>Cada estado esta representado por un numero, los números pares menos el 10 son salas, y los números impares son diálogos. También se cuenta como estado a el menú, end game, game over y pause, pero estos funcionan de manera diferentes, ya que son como un bucle. todo esto se puede ver en el siguiente gráfico:</p>
            <img src="/resource/code/estados.png" alt="Estados del juego">
        </div>
        <div class="two">
            <h2>Movimiento del jugador</h2>
            <p>Cada vez que se presiona una flecha en el teclado se activa un bucle de 4 sprite que simulan el caminar del personaje, los sprite están en una solo imagen (sheet), esto con el fin de que el juego sea mas rápido; en el código fuente lo que se hace es delimitar las coordenadas de la imagen para poder hacer el bucle con un For y listas</p>
            <img src="/resource/code/Movimiento_player.png" alt="Movimiento del jugador">
        </div>
        <div class="three">
            <h2>Movimiento de los Enemigos</h2>
            <p>El movimiento del enemigo se controla mediante dos variables de velocidad (x e y), el resultado de aplicar estas dos variables a las coordenadas actuales nos da una nueva coordenada, además la sala también afecta el desplazamiento del enemigo, ya que al avanzar de sala la velocidad se multiplica. Esto se explica en la siguiente gráfica: </p>
            <img src="/resource/code/enemigo.png" alt="Movimiento de los Enemigos">
        </div>
    </div>  
</main>