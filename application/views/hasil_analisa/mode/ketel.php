
          <div class="container-fluid">

          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?=base_url('hasil_analisa');?>">Analisa</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?=$page_title;?></li>
              </ol>
            </nav>
            <hr><br>

            <div class="row">

                <div class="col-md-4">
                                
                        <a href="<?=base_url('welcome/show_analisa_ketel/jj');?>"><h5>JJ</h5></a>
                            <table class="table table-sm table-bordered table-hover text-xs">
                                <tr>
                                    <th>Waktu</th>
                                    <th>Hardness</th>
                                    <th>pH</th>
                                    <th>TDS</th>
                                    <th>Phospat</th>
                                </tr>

                                <?php foreach($ketel['jj'] as $data): ?>
                                <tr>
                                    <td><?=date('H:i', strtotime($data->waktu));?></td>
                                    <td>
                                        <?php switch($data->sadah_jj)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->sadah_jj; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->ph_jj)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->ph_jj; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->tds_jj)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->tds_jj; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->phospat_jj)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->phospat_jj; break;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </table>
                        <br>
                </div>

                <div class="col-md-4">
                                
                        <a href="<?=base_url('welcome/show_analisa_ketel/y1');?>"><h5>Yoshimine1</h5></a>
                            <table class="table table-sm table-bordered table-hover text-xs">
                                <tr>
                                    <th>Waktu</th>
                                    <th>Hardness</th>
                                    <th>pH</th>
                                    <th>TDS</th>
                                    <th>Phospat</th>
                                </tr>

                                <?php foreach($ketel['y1'] as $data): ?>
                                <tr>
                                    <td><?=date('H:i', strtotime($data->waktu));?></td>
                                    <td>
                                        <?php switch($data->sadah_y1)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->sadah_y1; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->ph_y1)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->ph_y1; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->tds_y1)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->tds_y1; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->phospat_y1)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->phospat_y1; break;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </table>
                        <br>
                </div>

                <div class="col-md-4">
                                
                        <a href="<?=base_url('welcome/show_analisa_ketel/y2');?>"><h5>Yoshimine2</h5></a>
                            <table class="table table-sm table-bordered table-hover text-xs">
                                <tr>
                                    <th>Waktu</th>
                                    <th>Hardness</th>
                                    <th>pH</th>
                                    <th>TDS</th>
                                    <th>Phospat</th>
                                </tr>

                                <?php foreach($ketel['y2'] as $data): ?>
                                <tr>
                                    <td><?=date('H:i', strtotime($data->waktu));?></td>
                                    <td>
                                        <?php switch($data->sadah_y2)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->sadah_y2; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->ph_y2)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->ph_y2; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->tds_y2)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->tds_y2; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->phospat_y2)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->phospat_y2; break;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </table>
                        <br>
                </div>

                <div class="col-md-3">
                                
                        <a href="<?=base_url('welcome/show_analisa_ketel/djj');?>"><h5>Daert JJ</h5></a>
                            <table class="table table-sm table-bordered table-hover text-xs">
                                <tr>
                                    <th>Waktu</th>
                                    <th>pH</th>
                                    <th>TDS</th>
                                </tr>

                                <?php foreach($ketel['djj'] as $data): ?>
                                <tr>
                                    <td><?=date('H:i', strtotime($data->waktu));?></td>
                                    <td>
                                        <?php switch($data->ph_djj)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->ph_djj; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->tds_djj)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->tds_djj; break;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </table>
                        <br>
                </div>

                <div class="col-md-3">
                                
                        <a href="<?=base_url('welcome/show_analisa_ketel/dy');?>"><h5>Daert Yoshimine</h5></a>
                            <table class="table table-sm table-bordered table-hover text-xs">
                                <tr>
                                    <th>Waktu</th>
                                    <th>pH</th>
                                    <th>TDS</th>
                                </tr>

                                <?php foreach($ketel['dy'] as $data): ?>
                                <tr>
                                    <td><?=date('H:i', strtotime($data->waktu));?></td>
                                    <td>
                                        <?php switch($data->ph_dy)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->ph_dy; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->tds_dy)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->tds_dy; break;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </table>
                        <br>
                </div>

                <div class="col-md-3">
                                
                        <a href="<?=base_url('welcome/show_analisa_ketel/wtp');?>"><h5>WTP</h5></a>
                            <table class="table table-sm table-bordered table-hover text-xs">
                                <tr>
                                    <th>Waktu</th>
                                    <th>pH</th>
                                    <th>TDS</th>
                                </tr>

                                <?php foreach($ketel['wtp'] as $data): ?>
                                <tr>
                                    <td><?=date('H:i', strtotime($data->waktu));?></td>
                                    <td>
                                        <?php switch($data->ph_wtp)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->ph_wtp; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->tds_wtp)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->tds_wtp; break;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </table>
                        <br>
                </div>

                <div class="col-md-3">
                                
                        <a href="<?=base_url('welcome/show_analisa_ketel/hw');?>"><h5>HW</h5></a>
                            <table class="table table-sm table-bordered table-hover text-xs">
                                <tr>
                                    <th>Waktu</th>
                                    <th>pH</th>
                                    <th>TDS</th>
                                </tr>

                                <?php foreach($ketel['hw'] as $data): ?>
                                <tr>
                                    <td><?=date('H:i', strtotime($data->waktu));?></td>
                                    <td>
                                        <?php switch($data->ph_hw)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->ph_hw; break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php switch($data->tds_hw)
                                        {
                                            case 0  : echo "-"; break;
                                            default : echo $data->tds_hw; break;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </table>
                        <br>
                </div>

            </div>

    </div>

  </section>
  