<?php 
    include "./templates/header.php";
    include "./templates/menu.html";
?>

<?php 
   include './templates/frameworks.html';
?>


<div class="col s12 agendamento conteudo topo-grid">

<div class="row">
    <div class="col s12">
        

            <div id="test1" class="col s12 tabela_bg">
                    <table id="tabela_pacientes"  class="responsive-table tabela-cor" style="width:100%" >
                            <thead>
                                    <tr>
                                        <th></th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>11</th>
                                        <th>12</th>
                                        <th>13</th>
                                        <th>14</th>
                                        <th>15</th>
                                        <th>16</th>
                                        <th>17</th>
                                        <th>18</th>
                                        <th>19</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                        <th>20</th>
                                    </tr>
                            </thead>

                            <tbody id="grid" class="white ">
                                <tr class='grid-tr'>
                                
                                </tr>
                            </tbody>

                        </table>
        </div>
    </div>
</div>

<?php 
   include './templates/frameworks.html';
?>
<script src="./js/grid.js"></script>

<script>
    $(document).ready(function () {
        $('.tabs').tabs();
    });
</script>


<script>
    $(document).ready(function () {
        $('select').formSelect();
    });
</script> 

<?php 
   include './templates/footer.html';
?>
