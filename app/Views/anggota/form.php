<form method="post" action="<?base_url('/anggota/Save')?>?">

<div class="controller">
    <div align="center" class="text">From Anggota</h2>
</div>

<div align="center"class="card text-white bg-success mb-3">
    <div class="card-header"></div>
    <div class="card-body">

            <input type="hidden" name="id" value="<?$data['id']??''?>">
        
    <div class="form-group row">
        <label for="email"class="col-sm-2 col-form-lebel">Email</label>
        <div class="coll-sm-6">
            <input type="text" name="email" valu="<?=$data['email']??''?>">
    </div>  
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-2-form-label">Password</label>
        <div class="col-sm-6">
            <input type="password" name="katasandi" value="<?=$data['password']??''?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama_lenngkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="coll-sm-6">
            <input type="text" name="nama_lengkap" value="<?$data['nama_lengkap']??''?>">
        </div>
    </div>

    <div class="form-group row"
        <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-6">
            <select name="jeniskelamin" value="<?=$data['jeniskelamin']??''?>">
            <option value="" disabled selected>-</option>
            <option value="L">Laki-Laki </option>
            <option value="P">Perempuan </option>
        </select>
    </div>
</div>

    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-6">
            <textarea name="alamat" value="<?['alamat']??''?>"></textarea>
        </div>
    </div>
    <br>

    <button>Save</button>


    </div>
    </div>
    </div>
    </div>
</div>
</form>
       
       