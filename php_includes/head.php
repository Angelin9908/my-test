<div class="contenedor">
    <div class="ancho2">
      <div class="logo">
        <img src="recursos/img/logo.png" alt="">
      </div>
      <div class="sesion">
        <a href="php_acciones/salir.php"><img src="recursos/img/cerrar.png" alt=""></a>
      </div>
    </div>
  </div>
  <div class="contenedor_verde">
  <div class="ancho">
      <div class="cont_fecha">
        <p>          
        <script type="text/javascript">
              var d = new Date();
              var mes, dia;
              if(d.getDate()<10){
                  dia = '0'+ (d.getDate());
                }else{
                  dia= (d.getDate());
                }

              if((d.getMonth())<9){
                mes = '0'+ (d.getMonth()+1);
              }else{
                mes= (d.getMonth()+1);
              }
              document.write((dia),'/'+(mes),'/'+d.         getFullYear());
            </script>
          </p>
          <p id="reloj">
          <script type="text/javascript">
                function startTime(){
                today=new Date();
                h=today.getHours();
                m=today.getMinutes();
                s=today.getSeconds();
                m=checkTime(m);
                s=checkTime(s);
                document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
                t=setTimeout('startTime()',500);}
                function checkTime(i)
                {if (i<10) {i="0" + i;}return i;}
                window.onload=function(){startTime();}
          </script>
      </div>
    </div>
  </div>