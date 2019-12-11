 @extends('layout/list_login')

@section('container')

    <div style="margin-left:10px ; margin-top:10px;">
        <center>
        <table>
        <form action="/admin_edit" method="post">
         @csrf 
            <img src="/images/<?php echo $model['gambar'] ?>" style="margin-top:20px; width:500px;height:500px;">
            <tr>
                <h3>
              <td><b>Nama Barang</b></td>
              <td>:</td>
              <td>
                <div class="input-group input-group-sm mb-3"><input type="text" value="<?php echo $model['nama']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nama"></div>
              </td>
            </h3>
            </tr>
            <tr>
                <h3>
            <td><b>harga</b></td>
            <td>:</td>
              <td>
                <div class="input-group input-group-sm mb-3"><input type="text" value="<?php echo $model['harga']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="harga"></div>
              </td>
            </tr>
            <tr>
                <h3><td><b>Stok</b></td>
            <td>:</td>
              <td>
                <div class="input-group input-group-sm mb-3"><input type="text" value="<?php echo $model['stok']; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="stok"></div>
              </td>
            </tr>
        </table><br>
        <input type="hidden" name="id" value=<?php echo $model['id'] ?>>
        <input type="hidden" name="id" value=<?php echo $users['id'] ?>>
        
        <br><br>
        </div>
        </form>
        </center>
    </container>
@endsection 
<!-- @extends('layout/customer_login')

@section('container')

    <div style="margin-left:10px ; margin-top:10px;">
        <center>
        <table>
            <img src="/images/<?php echo $model['gambar'] ?>" style="margin-top:20px; width:500px;height:500px;">
        	<tr>
        		<h3><td><b>Nama Barang</b></td>		<td>: <?php echo $model['nama']; ?></td></h3>
        	</tr>
        	<tr>
        		<h3><td><b>harga  </b></td>		<td>: <?php echo $model['harga']; ?></td></h3>
        	</tr>
        	<tr>
        		<h3><td><b>stock  </b></td>		<td>: <?php echo $model['stok']; ?></td></h3>
        	</tr>
        </table><br><br>
         <input type="number" name='qty' value="0" min="0" max="<?php echo $model['stok']; ?>">
         <a href="login.php?pesan=a" class="btn btn-success" style="margin-bottom:20px">Beli</a>
        </div>
        </center>
    </container>
@endsection --> -->