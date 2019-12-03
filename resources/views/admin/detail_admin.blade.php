@extends('layout/list')

@section('container')

    <div style="margin-left:10px ; margin-top:10px;">
        <center>
        <table>
        <form action="/admin_edit" method="post">
      @csrf
        <input type="password" placeholder="Password" name="password" />
        <button type="submit">Login</button>
            
            <img src="/images/<?php echo $model['gambar'] ?>" style="margin-top:20px; width:500px;height:500px;">
        	<tr>
        		<h3><td><b>Nama Barang</b></td>
                <td>: <?php echo $model['nama']; ?></td></h3>
                <td><input type="text" placeholder="edit here.." name="edit_nama"/></td>
            </tr>
        	<tr>
        		<h3><td><b>harga  </b></td>
                <td>: <?php echo $model['harga']; ?></td></h3>
                <td><input type="text" placeholder="edit here.." name="edit_nama"/></td>
        	</tr>
        	<tr>
        		<h3><td><b>stock  </b></td>
                <td>: <?php echo $model['stok']; ?></td></h3>
                <td><input type="text" placeholder="edit here.." name="edit_nama"/></td>
        	</tr>
        </table><br><br>
        <button type="submit">Comfirm all</button>
        </div>
        </form>
        </center>
    </container>
@endsection