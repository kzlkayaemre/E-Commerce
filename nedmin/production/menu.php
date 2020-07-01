<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$menusor=$db->prepare("SELECT * FROM menu");
$menusor->execute();

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h2>Menü Listeleme <small>,

              <?php 

              if (@$_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif (@$_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>
            
            <div class="clearfix"></div>
            <div align="right">
              <a href="menu-ekle.php"><button class="btn btn-success btn-xs"> Yeni Kayıt Ekle</button></a></div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Menü Ad</th>
                  <th>Menü URL</th>
                  <th>Menü Sıra</th>
                  <th>Menü Durum</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { 

                  //veri tabanından silinen ıd'leri(primary key) tekrar düzene soktuk
                  //vt'de değişmesede id kısmına gerçek değerlerini yazdırmak yerine say değişkeninini arttıra arttıra yazdırdık.
                  $say++

                  ?>


                <tr>
                  <td><?php echo $say?></td>
                  <td><?php echo $menucek['menu_ad'] ?></td>
                  <td><?php echo $menucek['menu_url'] ?></td>
                  <td><?php echo $menucek['menu_sira'] ?></td>

                  <td><center>

                    <?php  

                  if ($menucek['menu_durum']==1) {?>
                    <button class="btn btn-success btn-xs">Aktif</button>
                  <?php } else { ?>
                    <button class="btn btn-danger btn-xs">Pasif</button>

                   <?php }?>
                  
                      </center>
                </td>

                  <td><center> <a href="menu-düzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"> <button class="btn btn-primary btn-xs">Düzenle</button> </a> </center></td>
                  <td><center> <a href="../netting/islem.php?menu_id= <?php echo $menucek['menu_id']; ?> &menusil=ok"> <button class="btn btn-danger btn-xs">Sil</button> </a> </center></td>
                </tr>



                <?php  }

                ?>


              </tbody>
            </table>

            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>




  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
