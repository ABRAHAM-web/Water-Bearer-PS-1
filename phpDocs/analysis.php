<?php include 'connection.php';?>
                   <table border="1" class="analysisTable text-white">
                        <tr>
                            <th class="analysisTableCol"><abbr  title="Sample Date">Date</abbr></th>
                            <!-- <th class="analysisTableCol"><abbr title="Heterotrophic Plate count (Cfu/1ml)">HPC</abbr></th>
                            <th class="analysisTableCol"><abbr title="Total Coliforms count  (Cfu/100ml)">TCC</abbr></th>
                            <th class="analysisTableCol"><abbr title="E.Coli (Cfu/100ml)">E.C</abbr></th>
                            <th class="analysisTableCol"><abbr title="PH @ 25 deg (PH Units)">PH</abbr></th>
                            <th class="analysisTableCol"><abbr title="Conductivity at 25 degrees celcius (μS/cm)">Cond</abbr></th>
                            <th class="analysisTableCol"><abbr title="Sulphate as SO4 (mg/l SO4-2)">SO4</abbr></th>
                            <th class="analysisTableCol"><abbr title="ortho-Phosphate as P (mg/l P)">P</abbr></th>
                            <th class="analysisTableCol"><abbr title="Flouride as F (mg/l F-)">F</abbr></th>
                            <th class="analysisTableCol"><abbr title="Chloride as Cl (mg/l Cl-)">Cl</abbr></th>
                            <th class="analysisTableCol"><abbr title="Total desolved solids (mg/l)">TDS</abbr></th>
                            <th class="analysisTableCol"><abbr title="Total Alkalinity as CaCO3 (mg/l CaCO3)">CaCO3</abbr></th>
                            <th class="analysisTableCol"><abbr title="Sodium as Na (mg/l Na)">Na</abbr></th>
                            <th class="analysisTableCol"><abbr title="Magnesium as Mg (mg/l Mg)">Mg</abbr> </th>
                            <th class="analysisTableCol"><abbr title="Calcium as Ca (mg/l Ca)">Ca</abbr></th>
                            <th class="analysisTableCol"><abbr title="Potassium as K (mg/l K)">K</abbr></th>
                            <th class="analysisTableCol"><abbr title="Manganese as Mn (mg/l Mn)">Mn</abbr></th>
                            <th class="analysisTableCol"><abbr title="Iron (mg/l Fe)">Fe</abbr></th>
                            <th class="analysisTableCol"><abbr title="Aluminium as AL (mg/l Al)">Al</abbr></th>
                            <th class="analysisTableCol"><abbr title="Zink as Zn (mg/l Zn)">Zn</abbr></th>
                            <th class="analysisTableCol"><abbr title="Copper as Cu (mg/l Cu)">Cu</abbr></th>
                            <th class="analysisTableCol"><abbr title="Boron as B (mg/l B)">B</abbr></th> -->
<!--                            <th class="analysisTableCol"><abbr title="Supplier">Supplier</abbr></th>-->
                            <th class="analysisTableCol"><abbr title="Documentation">Documentation</abbr></th>
                        </tr>
                       <?php
                            if (!$conn) {
                            echo 'Connection error: ' .mysqli_connect_error();
                            } else {
                               // echo 'Connection established :';

                            };
                            //DATE_FORMAT("2017-06-15", "%M %d %Y");
                            //$sql = 'select * from analysis order by sampleDate desc';
                            $sql = "select date_format(sampleDate,'%Y/%m/%d') as sampleDate,                                                                                                     
                                                                Documentation as Documentation
                                                                from analysis order by sampleDate desc limit 20";

                                //Comments as Comments,

                            $result = $conn->query($sql);
                             if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                //echo $row['sampleDate']."<br>";
                                echo "<tr>
                                        <td>{$row['sampleDate']}</td>                                  
                                        <td><a href='{$row['Documentation']}' target='_blank'>{$row['Documentation']}</td>
                                      </tr>";
                                }
                            }

                        ?>

                        </table>
                        