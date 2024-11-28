<?php
header("Content-type: text/html; charset=iso-8859-1");
date_default_timezone_set('America/Sao_Paulo');
/**
 * @author ...
 * @copyright 2024
 */

    if(!isset($_GET['ano'])){
        $data_atual = new DateTime();
        $ano_atual = intval($data_atual->format('Y'));
    }else {
        $ano_atual = intval($_GET['ano']); 
    
    }
    
    $nome_mes = array('Janeiro', 'Fevereiro', 'Marco', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
    echo "<html><head>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <style>
                    body {background-color:#c1dcf6; display: center;}
                    .vazio {background-color:#ccc;}  /* para as c�lulas vazias */
                    .em_linha {display: inline-block; position: relative; padding: 10px;} /* formata��o complementar da tabela */
                    table, td, th {border: 1px solid black; border-collapse: collapse;}
                    th {width: 30px;}
                    td {height: 30px; text-align: center;}
                    #navega{width: 60%; text-align: center; font-size: 2em;}
                    a {text-decoration: none;}
                </style>
            </head>
            <body>";
    echo "<div id='navega'> <a href='?ano=".($ano_atual-1)."'>&lt;&lt;</a> $ano_atual <a href='?ano=".($ano_atual+1)."'>&gt;&gt;</a></div>";
    $mes = 1;      
    while($mes<=12){
        $data1 = mktime(0,0,0,$mes,1,$ano_atual);        
        $dia1 = date('w', $data1);
        $diaMes1 = date('t', $data1);

        $diaAtual = 1;
        $linha_atual = 1;
        
        echo "<div id=mes".$mes." class='em_linha'>";
            echo "<table>
                    <caption><b>".$nome_mes[$mes-1]."</b></caption>
                    <thead>
                        <tr>
                            <th>Dom</th>
                            <th>Seg</th>
                            <th>Ter</th>
                            <th>Qua</th>
                            <th>Qui</th>
                            <th>Sex</th>
                            <th>Sab</th>
                        </tr>                        
                    </thead>
                    <tbody>";
                    
                    while($diaAtual <= $diaMes1) {
                        echo "<tr>";
                        for($i = 0; $i < 7; $i++) {
                            if($i < $dia1 && $linha_atual == 1)
                                echo "<td class='vazio'></td>";
                            
                            elseif($diaAtual <= $diaMes1) {
                                echo "<td>".$diaAtual."</td>";
                                $diaAtual++;  
                            }

                            else
                                echo "<td class='vazio'></td>";
                            
                        }
                        $linha_atual++;
                         
                    }

            echo "</tr></tbody>
                </table>
            ";

        $mes++;
        echo '</div>';

        if($mes % 4 == 1)
            echo "<br>";
    }

        echo "</table>";
        echo "
            </body>
        </html>";
    
?>