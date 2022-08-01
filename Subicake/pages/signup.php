<?php
ob_start();
session_start();
include "../include/config.php";
include "../main/head.php";
?>

<body>
<div class="container">
<div class="register" style="padding: 40px !important;
    margin-top: 0 !important;
       height: 730px;
    border-radius: 33px 33px 33px 33px;
    background: #FCFBFA !important;
    border-color: #ccc;
    border: none;
    padding-right: 10px;
    margin: 85px auto 0 !important;
    max-width: 642px;
    box-shadow: none;">
<h1 style="margin-top:20px"> Registration Form </h1>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" name="username" class="form-control" id="inputuname" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" required>
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Name</label>
      <input type="text" name="name" class="form-control" id="inputName" required>
    </div>

     <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" name="email" class="form-control" id="inputPassword4" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Enter the Password again</label>
      <input type="password" name="passval" class="form-control" id="inputPassword4" required>
    </div>
  </div>
  <div class="form-row">
   <div class="form-group col-md-4">
      <label for="inputState">Tanggal</label>
      <select name="date" id="inputState" class="form-control" required>
        <option selected>Pilih Tanggal</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
      </select>
    </div>
     <div class="form-group col-md-4">
      <label for="inputBulan">Bulan</label>
      <select name="month" id="inputBulan" class="form-control" required>
        <option selected>Pilih Bulan</option>
        <option>Januari</option>
        <option>Febuari</option>
        <option>Maret</option>
        <option>April</option>
        <option>Mei</option>
        <option>Juni</option>
        <option>Juli</option>
        <option>Agustus</option>
        <option>September</option>
        <option>Oktober</option>
        <option>November</option>
        <option>Desember</option>
      </select>
    </div>
   <div class="form-group col-md-4">
      <label for="inputYear">Tahun</label>
      <input name="year" type="text" class="form-control" id="inputtahun" required>
   </div>
  <div class="form-row">
  	<div class="form-group col-md-6">
    <label for="inputAddress2">Alamat</label>
    <input type="text" name="address" class="form-control" id="inputAddress2" required>
  	</div>
  	<div class="form-group col-md-6">
    <label for="inputphone">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="inputPhone" required>
  	</div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck" required>
        I understand & agree of the	 terms
      </label>
    </div>
  </div>	
  <button type="submit" name="register" class="btn btn-primary">Register</button>
</form>
	</div>
</div>
</div>
</body>