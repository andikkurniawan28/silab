<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Silab_File.xls");
?>
<table class="table table-sm table-bordered table-hover text-xs">
                    <tr>
                        <th>Time</th>
                        <th>TDS</th>
                        <th>pH</th>
                        <?php if($id == 'jj' || $id == 'y1' or $id == 'y2'): ?>
                            <th>Hardness</th>
                            <th>Phospat</th>
                        <?php endif; ?>
                        <?php if($this->session->userdata('role') == "admin"): ?>
                            <th>Control</th>
                        <?php endif; ?>
                    </tr>

                    <?php foreach($hasil_analisa as $data): ?>
                    <tr>
                        <td><?=$data->waktu;?></td>
                        <td>
                            <?php switch($id)
                            {
                                case 'jj'   : if($data->tds_jj == 0) echo "-"; else echo $data->tds_jj; break;
                                case 'y1'   : if($data->tds_y1 == 0) echo "-"; else echo $data->tds_y1; break;
                                case 'y2'   : if($data->tds_y2 == 0) echo "-"; else echo $data->tds_y2; break;
                                case 'djj'  : if($data->tds_djj == 0) echo "-"; else echo $data->tds_djj; break;
                                case 'dy'   : if($data->tds_dy == 0) echo "-"; else echo $data->tds_dy; break;
                                case 'wtp'  : if($data->tds_wtp == 0) echo "-"; else echo $data->tds_wtp; break;
                                case 'hw'   : if($data->tds_hw == 0) echo "-"; else echo $data->tds_hw; break;
                            }
                            ?>
                        </td>
                        <td>
                            <?php switch($id)
                            {
                                case 'jj'   : if($data->ph_jj == 0) echo "-"; else echo $data->ph_jj; break;
                                case 'y1'   : if($data->ph_y1 == 0) echo "-"; else echo $data->ph_y1; break;
                                case 'y2'   : if($data->ph_y2 == 0) echo "-"; else echo $data->ph_y2; break;
                                case 'djj'  : if($data->ph_djj == 0) echo "-"; else echo $data->ph_djj; break;
                                case 'dy'   : if($data->ph_dy == 0) echo "-"; else echo $data->ph_dy; break;
                                case 'wtp'  : if($data->ph_wtp == 0) echo "-"; else echo $data->ph_wtp; break;
                                case 'hw'   : if($data->ph_hw == 0) echo "-"; else echo $data->ph_hw; break;
                            }
                            ?>
                        </td>

                        <?php if($id == 'jj' || $id == 'y1' or $id == 'y2'): ?>
                            
                            <td>
                                <?php switch($id)
                                {
                                    case 'jj'   : if($data->sadah_jj == 0) echo "-"; else echo $data->sadah_jj; break;
                                    case 'y1'   : if($data->sadah_y1 == 0) echo "-"; else echo $data->sadah_y1; break;
                                    case 'y2'   : if($data->sadah_y2 == 0) echo "-"; else echo $data->sadah_y2; break;
                                }
                                ?>
                            </td>

                    
                            <td>
                                <?php switch($id)
                                {
                                    case 'jj'   : if($data->phospat_jj == 0) echo "-"; else echo $data->phospat_jj; break;
                                    case 'y1'   : if($data->phospat_y1 == 0) echo "-"; else echo $data->phospat_y1; break;
                                    case 'y2'   : if($data->phospat_y2 == 0) echo "-"; else echo $data->phospat_y2; break;
                                }
                                ?>
                            </td>

                        <?php endif; ?>

                    </tr>
                    <?php endforeach; ?>

                </table>

      

